<?php

class Unit extends BaseModel {

    public $unit_name, $information;

    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_unit_name', 'validate_information');
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Unit');
        $query->execute();
        $rows = $query->fetchAll();
        $units = array();
        foreach ($rows as $row) {
            $units[] = new Unit(array(
                'unit_name' => $row['unit_name'],
                'information' => $row['information']
            ));
        }
        return $units;
    }

    public static function find($unit_name) {
        $query = DB::connection()->prepare('SELECT * FROM Unit WHERE unit_name = :unit_name LIMIT 1');
        $query->execute(array('unit_name' => $unit_name));
        $row = $query->fetch();
        if ($row) {
            $unit = new Unit(array(
                'unit_name' => $row['unit_name'],
                'information' => $row['information']
            ));

            return $unit;
        }
        return null;
    }

    public function save() {
        $query = DB::connection()->prepare
                ('INSERT INTO Unit (unit_name, information) '
                . 'VALUES (:unit_name, :information) RETURNING unit_name');
        $query->execute(array(
            'unit_name' => $this->unit_name,
            'information' => $this->information));
    }

    public function update() {
        $query = DB::connection()->prepare
                ('UPDATE Unit SET
                    information = :information
                WHERE unit_name = :unit_name');

        $query->execute(array(
            'unit_name' => $this->unit_name,
            'information' => $this->information));
    }

    public function destroy() {
        $query = DB::connection()->prepare('DELETE FROM Unit WHERE unit_name = :unit_name');

        $query->execute(array('unit_name' => $this->unit_name));
    }

    public function validate_unit_name() {
        $errors = array();
        if ($this->unit_name == '' || $this->unit_name == null) {
            $errors[] = 'Nimi ei saa olla tyhjä.';
        }
        if (strlen($this->unit_name) > 50) {
            $errors[] = 'Nimen pituuden tulee olla enintään 50 merkkiä.';
        }
        return $errors;
    }

    public function validate_information() {
        $errors = array();

        if (strlen($this->information) > 50) {
            $errors[] = 'Selitteen pituuden tulee olla enintään 50 merkkiä.';
        }
        return $errors;
    }

}
