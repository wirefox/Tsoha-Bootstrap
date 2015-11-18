<?php

class Resepti extends BaseModel {

    public $id,
            $nimi,
            $kategoria,
            $annoksia,
            $valmistusohje,
            $kuva,
            $lahde,
            $lisayspvm,
            $muokkauspvm;

    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_nimi', 'validate_kategoria', 'validate_annoksia', 'validate_valmistusohje', 'validate_kuva', 'validate_lahde');
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Resepti');
        $query->execute();
        $rows = $query->fetchAll();
        $reseptit = array();

        foreach ($rows as $row) {
            $reseptit[] = new Resepti(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'kategoria' => $row['kategoria'],
                'annoksia' => $row['annoksia'],
                'valmistusohje' => $row['valmistusohje'],
                'kuva' => $row['kuva'],
                'lahde' => $row['lahde'],
                'lisayspvm' => $row['lisayspvm'],
                'muokkauspvm' => $row['muokkauspvm']
            ));
        }

        return $reseptit;
    }

    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Resepti WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();
        if ($row) {
            $resepti = new Resepti(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'kategoria' => $row['kategoria'],
                'annoksia' => $row['annoksia'],
                'valmistusohje' => $row['valmistusohje'],
                'kuva' => $row['kuva'],
                'lahde' => $row['lahde'],
                'lisayspvm' => $row['lisayspvm'],
                'muokkauspvm' => $row['muokkauspvm'],
            ));
            return $resepti;
        }
        return null;
    }

    public function save() {
        $query = DB::connection()->prepare
                ('INSERT INTO Resepti (nimi, kategoria, annoksia, valmistusohje, kuva, lahde, lisayspvm, muokkauspvm) '
                . 'VALUES (:nimi, :kategoria, :annoksia, :valmistusohje, :kuva, :lahde, NOW(), NOW()) RETURNING id');
        $query->execute(array(
            'nimi' => $this->nimi,
            'kategoria' => $this->kategoria,
            'annoksia' => $this->annoksia,
            'valmistusohje' => $this->valmistusohje,
            'kuva' => $this->kuva,
            'lahde' => $this->lahde));
        $row = $query->fetch();

        $this->id = $row['id'];
    }

    public function update() {
        $query = DB::connection()->prepare
                ('UPDATE Resepti SET 
                    nimi = :nimi, 
                    kategoria = :kategoria, 
                    annoksia = :annoksia,
                    valmistusohje = :valmistusohje,
                    kuva = :kuva,
                    lahde = :lahde
                WHERE id = :id');

        $query->execute(array(
            'id' => $this->id,
            'nimi' => $this->nimi,
            'kategoria' => $this->kategoria,
            'annoksia' => $this->annoksia,
            'valmistusohje' => $this->valmistusohje,
            'kuva' => $this->kuva,
            'lahde' => $this->lahde));

        $row = $query->fetch();

        //$this->id = $row['id'];
//        Kint::dump($row);
    }

    public function destroy() {
        $query = DB::connection()->prepare('DELETE FROM Resepti WHERE id = :id');

        $query->execute(array('id' => $this->id));
    }

    public function validate_nimi() {
        $errors = array();
        if ($this->nimi == '' || $this->nimi == null) {
            $errors[] = 'Nimi ei saa olla tyhjä.';
        }
        if (strlen($this->nimi) < 3) {
            $errors[] = 'Nimen pituuden tulee olla vähintään 3 merkkiä.';
        }
        if (strlen($this->nimi) > 50) {
            $errors[] = 'Nimen pituuden tulee olla enintään 50 merkkiä.';
        }
        return $errors;
    }

    public function validate_kategoria() {
        $errors = array();
        if ($this->kategoria == 'Valitse...') {
            $errors[] = 'Valitse kategoria';
        }
        return $errors;
    }

    public function validate_annoksia() {
        $errors = array();
        if ($this->annoksia == '' || $this->annoksia == null) {
            $errors[] = 'Annosmäärä ei saa olla tyhjä.';
        }
//        if (is_numeric($this->annoksia) < 1) {
//            $errors[] = 'Annosmäärän tulee olla vähintään 1.';
//        }

        if (!is_numeric($this->annoksia)) {
            $errors[] = 'Annosmäärän tulee olla numero.';
        }
        return $errors;
    }

    public function validate_valmistusohje() {
        $errors = array();
        if ($this->valmistusohje == '' || $this->valmistusohje == null) {
            $errors[] = 'Valmistusohje ei saa olla tyhjä.';
        }
        if (strlen($this->valmistusohje) < 3 && strlen($this->valmistusohje) > 3000) {
            $errors[] = 'Valmistusohjeen pituuden tulee olla vähintään 3 merkkiä.';
        }
        if (strlen($this->valmistusohje) > 3000) {
            $errors[] = 'Valmistusohjeen pituuden tulee olla enintään 3000 merkkiä.';
        }
        return $errors;
    }

    public function validate_kuva() {
        $errors = array();
        if ($this->kuva == '' || $this->kuva == null) {
            $errors[] = 'Kuvan lähdeviite ei saa olla tyhjä.';
        }
        if (strlen($this->kuva) < 3) {
            $errors[] = 'Kuvan lähdeviitteen pituuden tulee olla vähintään 3 merkkiä.';
        }
        return $errors;
    }

    public function validate_lahde() {
        $errors = array();
        if ($this->lahde == '' || $this->lahde == null) {
            $errors[] = 'Reseptin lähde ei saa olla tyhjä.';
        }
        if (strlen($this->lahde) < 3) {
            $errors[] = 'Reseptin lähteen pituuden tulee olla vähintään 3 merkkiä.';
        }
        return $errors;
    }

}
