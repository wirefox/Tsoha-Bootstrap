<?php

class RecipeIngredient extends BaseModel {

    public $recipe_id, $amount, $unit, $ingredient;

    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_amount', 'validate_unit', 'validate_ingredient');
    }

    public function allRecipeIngredients($recipe_id) {
        $query = DB::connection()->prepare('SELECT * FROM Recipe_ingredient WHERE recipe_id = :recipe_id');
        $query->execute(array('recipe_id' => $recipe_id));

        $rows = $query->fetchAll();
        $recipeIngredients = array();

        foreach ($rows as $row) {
            $recipeIngredients[] = new RecipeIngredient(array(
                'recipe_id' => $row['recipe_id'],
                'amount' => $row['amount'],
                'unit' => $row['unit'],
                'ingredient' => $row['ingredient']
            ));
        }

        return $recipeIngredients;
    }

    public function save() {
        $query = DB::connection()->prepare
                ('INSERT INTO Recipe_ingredient (recipe_id, amount, unit, ingredient) '
                . 'VALUES (:recipe_id, :amount, :unit, :ingredient)');
        $query->execute(array(
            'recipe_id' => $this->recipe_id,
            'amount' => $this->amount,
            'unit' => $this->unit,
            'ingredient' => $this->ingredient));
    }

    public function validate_amount() {
        $errors = array();
        if ($this->amount == '' || $this->amount == null) {
            $errors[] = 'Raaka-aineelle tulee antaa määrä.';
        }
        if (is_numeric($this->amount) < 0.1) {
            $errors[] = 'Raaka-aineen määrän tulee olla vähintään 0.1.';
        }
        if (is_numeric($this->amount) > 9999) {
            $errors[] = 'Raaka-aineen määrä saa olla enintään 9999.';
        }
        return $errors;
    }

    public function validate_unit() {
        $errors = array();
        if ($this->unit == '' || $this->unit == null) {
            $errors[] = 'Raaka-aineelle tulee valita mittayksikkö.';
        }
        if ($this->unit == 'valitse...') {
            $errors[] = 'Raaka-aineelle tulee valita mittayksikkö.';
        }
        return $errors;
    }

    public function validate_ingredient() {
        $errors = array();
        if ($this->ingredient == '' || $this->ingredient == null) {
            $errors[] = 'Reseptille tulee valita raaka-aine.';
        }
        if ($this->ingredient == 'valitse...') {
            $errors[] = 'Reseptille tulee valita raaka-aine.';
        }
        return $errors;
    }

}
