<?php

class RecipeIngredientController extends BaseController {

    public static function create($recipe_id) {
        self::check_logged_in();
        $recipe = Recipe::find($recipe_id);
        $ingredients = Ingredient::all();
        $units = Unit::all();
        View::make('recipe_ingredient/new.html', array('recipe' => $recipe, 'ingredients' => $ingredients, 'units' => $units));
    }

    public static function storeNew() {
        self::check_logged_in();
        $params = $_POST;

        $attributes = array(
            'recipe_id' => $params['recipe_id'],
            'amount' => $params['amount'],
            'unit' => $params['unit'],
            'ingredient' => $params['ingredient']
        );
        $recipe_ingredient = new RecipeIngredient($attributes);

        $errors = $recipe_ingredient->errors();

        if (count($errors) == 0) {
            $recipe_ingredient->save();
            Redirect::to('/recipe/' . $recipe_ingredient->recipe_id, array('message' => 'Raaka-aine on lisätty reseptiin.'));
        } else {
            $ingredients = Ingredient::all();
            $units = Unit::all();
            $recipe_id = $params['recipe_id'];
            $recipe = Recipe::find($recipe_id);
            View::make('recipe_ingredient/new.html', array('recipe' => $recipe, 'errors' => $errors, 'attributes' => $attributes, 'ingredients' => $ingredients, 'units' => $units));
        }
    }

    public static function destroy() {
        self::check_logged_in();
    }

// METODI, JOLLA TALLENNETTAISIIN RESEPTIN LUOMISEN YHTEYDESSÄ RAAKA-AINEITA; EI TOTEUTETA TÄMÄN KURSSIN PUITTEISSA.
//    public static function store($recipe_id, $amount, $unit, $ingredient) {
//
//        $attributes = array(
//            'recipe_id' => $recipe_id,
//            'amount' => $amount,
//            'unit' => $unit,
//            'ingredient' => $ingredient
//        );
//        $recipe_ingredient = new RecipeIngredient($attributes);
//        $errors = $recipe_ingredient->errors();
//
//        if (count($errors) == 0) {
//            $recipe_ingredient->save();
//        } else {
//            View::make('recipe/new.html', array('errors' => $errors));
//            //MITEN SAAN VIRHEET LÄHETETTYÄ RECIPECONTROLLERILLE, JOKA OIKEASTI PYYTÄÄ NEW-NÄKYMÄN UUDELLEEN??
//        }
//    }
}
