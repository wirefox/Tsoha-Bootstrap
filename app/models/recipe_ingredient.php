<?php

class RecipeIngredient extends BaseModel {

    public $recipe_id, $amount, $unit, $ingredient;

    public function __construct($attributes) {
        parent::__construct($attributes);
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

}
