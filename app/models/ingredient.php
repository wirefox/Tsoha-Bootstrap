<?php

class Ingredient extends BaseModel {

    public $ingredient_name, $nutrition;

    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_ingredient_name', 'validate_nutrition');
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Ingredient');
        $query->execute();
        $rows = $query->fetchAll();
        $ingredients = array();
        foreach ($rows as $row) {
            $ingredients[] = new Ingredient(array(
                'ingredient_name' => $row['ingredient_name'],
                'nutrition' => $row['nutrition']
            ));
        }
        return $ingredients;
    }

    public static function find($ingredient_name) {
        $query = DB::connection()->prepare('SELECT * FROM Ingredient WHERE ingredient_name = :ingredient_name LIMIT 1');
        $query->execute(array('ingredient_name' => $ingredient_name));
        $row = $query->fetch();
        if ($row) {
            $ingredient = new Ingredient(array(
                'ingredient_name' => $row['ingredient_name'],
                'nutrition' => $row['nutrition']
            ));

            return $ingredient;
        }
        return null;
    }

    public function save() {
        $query = DB::connection()->prepare
                ('INSERT INTO Ingredient (ingredient_name, nutrition) '
                . 'VALUES (:ingredient_name, :nutrition) RETURNING ingredient_name');
        $query->execute(array(
            'ingredient_name' => $this->ingredient_name,
            'nutrition' => $this->nutrition));
    }

    public function update() {
        $query = DB::connection()->prepare
                ('UPDATE Ingredient SET
                    nutrition = :nutrition
                WHERE ingredient_name = :ingredient_name');

        $query->execute(array(
            'ingredient_name' => $this->ingredient_name,
            'nutrition' => $this->nutrition));
    }

    public function destroy() {
        $query = DB::connection()->prepare('DELETE FROM Ingredient WHERE ingredient_name = :ingredient_name');

        $query->execute(array('ingredient_name' => $this->ingredient_name));
    }

    public function validate_ingredient_name() {
        $errors = array();
        if ($this->ingredient_name == '' || $this->ingredient_name == null) {
            $errors[] = 'Nimi ei saa olla tyhjä.';
        }
        if (strlen($this->ingredient_name) < 3) {
            $errors[] = 'Nimen pituuden tulee olla vähintään 3 merkkiä.';
        }
        if (strlen($this->ingredient_name) > 50) {
            $errors[] = 'Nimen pituuden tulee olla enintään 50 merkkiä.';
        }
        return $errors;
    }

    public function validate_nutrition() {
        $errors = array();
        if ($this->nutrition == '' || $this->nutrition == null) {
            $errors[] = 'Kenttä ei saa olla tyhjä.';
        }

        if (strlen($this->nutrition) > 50) {
            $errors[] = 'Nimen pituuden tulee olla enintään 50 merkkiä.';
        }
        return $errors;
    }

}
