<?php

class Category extends BaseModel {

    public $category_name, $information;

    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_category_name', 'validate_information');
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Category');
        $query->execute();
        $rows = $query->fetchAll();
        $categories = array();
        foreach ($rows as $row) {
            $categories[] = new Category(array(
                'category_name' => $row['category_name'],
                'information' => $row['information']
            ));
        }
        return $categories;
    }

    public static function find($category_name) {
        $query = DB::connection()->prepare('SELECT * FROM Category WHERE category_name = :category_name LIMIT 1');
        $query->execute(array('category_name' => $category_name));
        $row = $query->fetch();
        if ($row) {
            $category = new Category(array(
                'category_name' => $row['category_name'],
                'information' => $row['information']
            ));

            return $category;
        }
        return null;
    }

    public function save() {
        $query = DB::connection()->prepare
                ('INSERT INTO Category (category_name, information) '
                . 'VALUES (:category_name, :information) RETURNING category_name');
        $query->execute(array(
            'category_name' => $this->category_name,
            'information' => $this->information));
    }

    public function update() {
        $query = DB::connection()->prepare
                ('UPDATE Category SET
                    information = :information
                WHERE category_name = :category_name');

        $query->execute(array(
            'category_name' => $this->category_name,
            'information' => $this->information));
    }

    public function destroy() {
        $query = DB::connection()->prepare('DELETE FROM Category WHERE category_name = :category_name');

        $query->execute(array('category_name' => $this->category_name));
    }

    public function validate_category_name() {
        $errors = array();
        if ($this->category_name == 'valitse...') {
            $errors[] = 'Valitse reseptille kategoria.';
        }
        if ($this->category_name == '' || $this->category_name == null) {
            $errors[] = 'Nimi ei saa olla tyhjä.';
        }
        if (strlen($this->category_name) < 3) {
            $errors[] = 'Nimen pituuden tulee olla vähintään 3 merkkiä.';
        }
        return $errors;
    }

    public function validate_information() {
        $errors = array();
        if ($this->information == '' || $this->information == null) {
            $errors[] = 'Kenttä ei saa olla tyhjä.';
        }

        if (strlen($this->information) > 50) {
            $errors[] = 'Nimen pituuden tulee olla enintään 50 merkkiä.';
        }
        return $errors;
    }

}
