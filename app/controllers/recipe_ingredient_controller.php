<?php

class RecipeIngredientController extends BaseController {

    public static function create($recipe_id) {
        self::check_logged_in();
        $recipe = Recipe::find($recipe_id);
        $ingredients = Ingredient::all();
        View::make('recipe_ingredient/new.html', array('recipe' => $recipe, 'ingredients' => $ingredients));
    }

    public static function store($recipe_id, $amount, $unit, $ingredient) {

        $attributes = array(
            'recipe_id' => $recipe_id,
            'amount' => $amount,
            'unit' => $unit,
            'ingredient' => $ingredient
        );
        $recipe_ingredient = new RecipeIngredient($attributes);
        $recipe_ingredient->save();
    }

    public static function storeNew() {
        $params = $_POST;

        $attributes = array(
            'recipe_id' => $params['recipe_id'],
            'ingredient' => $params['ingredient'],
            'amount' => $params['amount'],
            'unit' => $params['unit']
        );
        $recipe_ingredient = new RecipeIngredient($attributes);
        $recipe_ingredient->save();
        Redirect::to('/recipe/' . $recipe_ingredient->recipe_id, array('message' => 'Raaka-aine on lisätty reseptiin.'));
    }

    public static function destroy() {
        self::check_logged_in();
    }

}
