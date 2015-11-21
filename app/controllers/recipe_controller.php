<?php

class RecipeController extends BaseController {

    public static function index() {
        $recipes = Recipe::all();
        View::make('recipe/index.html', array('recipes' => $recipes));
    }

    public static function create() {
        self::check_logged_in();
        $ingredients = Ingredient::all();
        View::make('recipe/new.html', array('ingredients' => $ingredients));
    }

    public static function store() {
        self::check_logged_in();

        $params = $_POST;

        $attributes = array(
            'recipe_name' => $params['recipe_name'],
            'category' => $params['category'],
            'portion_amount' => $params['portion_amount'],
            'instruction' => $params['instruction'],
            'picture' => $params['picture'],
            'recipe_source' => $params['recipe_source']
        );

        $recipe_ingredients = array(
            'amount' => $params['amount'],
            'unit' => $params['unit'],
            'ingredient' => $params['ingredient']
        );

        $ingredients = Ingredient::all();

        $recipe = new Recipe($attributes);
        $errors = $recipe->errors();

        if (count($errors) == 0) {
            $recipe->save();
            RecipeIngredientController::store($recipe->id, $params['amount'], $params['unit'], $params['ingredient']);
            Redirect::to('/recipe/' . $recipe->id, array('message' => 'Resepti on lisätty reseptipankkiin.'));
        } else {
            View::make('recipe/new.html', array('errors' => $errors, 'attributes' => $attributes,
                'recipe_ingredients' => $recipe_ingredients, 'ingredients' => $ingredients));
        }
    }

    public static function show($id) {
        //    self::check_logged_in();
        $recipe = Recipe::find($id);
        $recipe_ingredients = RecipeIngredient::allRecipeIngredients($id);
        View::make('recipe/show.html', array('recipe' => $recipe, 'recipe_ingredients' => $recipe_ingredients));
    }

    //muokkauslomakkeen esittäminen:
    public static function edit($id) {
        self::check_logged_in();
        $recipe = Recipe::find($id);
        $recipe_ingredients = RecipeIngredient::allRecipeIngredients($id);
        $ingredients = Ingredient::all();
        View::make('recipe/edit.html', array('attributes' => $recipe, 'recipe_ingredients' => $recipe_ingredients, 'ingredients' => $ingredients));
    }

    //muokkauslomakkeen käsittely:
    public static function update($id) {
        self::check_logged_in();
        $params = $_POST;

        $attributes = array(
            'id' => $id,
            'recipe_name' => $params['recipe_name'],
            'category' => $params['category'],
            'portion_amount' => $params['portion_amount'],
            'instruction' => $params['instruction'],
            'picture' => $params['picture'],
            'recipe_source' => $params['recipe_source']
        );
        $recipe = new Recipe($attributes);
        $errors = $recipe->errors();

        if (count($errors) > 0) {
            View::make('recipe/edit.html', array('errors' => $errors, 'attributes' => $attributes));
        } else {
            $recipe->update();
            Redirect::to('/recipe/' . $id, array('message' => 'Reseptiä on muokattu onnistuneesti.'));
        }
    }

    public static function destroy($id) {
        self::check_logged_in();
        $recipe = new Recipe(array('id' => $id));
        $recipe->destroy();

        Redirect::to('/recipe', array('message' => 'Resepti on poistettu onnistuneesti.'));
    }

}

//VANHAT:
//
//    public static function show($id) {
//        self::check_logged_in();
//        $recipe = Recipe::find($id);
//        View::make('recipe/show.html', array('recipe' => $recipe));
//    }

//    public static function create() {
//        self::check_logged_in();
//        View::make('recipe/new.html');
//    }

//    public static function store() {
//        self::check_logged_in();
//        $params = $_POST;
//        $attributes = array(
//            'recipe_name' => $params['recipe_name'],
//            'category' => $params['category'],
//            'portion_amount' => $params['portion_amount'],
//            'instruction' => $params['instruction'],
//            'picture' => $params['picture'],
//            'recipe_source' => $params['recipe_source']
//        );
//
//        $recipe = new Recipe($attributes);
//        $errors = $recipe->errors();
//
//        if (count($errors) == 0) {
//            $recipe->save();
//
//            Redirect::to('/recipe/' . $recipe->id, array('message' => 'Resepti on lisätty reseptipankkiin!'));
//        } else {
//            View::make('recipe/new.html', array('errors' => $errors, 'attributes' => $attributes));
//        }
//    }
//    public static function edit($id) {
//        self::check_logged_in();
//        $recipe = Recipe::find($id);
//        View::make('recipe/edit.html', array('attributes' => $recipe));
//    }
//    public static function update($id) {
//        self::check_logged_in();
//        $params = $_POST;
//
//        $attributes = array(
//            'id' => $id,
//            'recipe_name' => $params['recipe_name'],
//            'category' => $params['category'],
//            'portion_amount' => $params['portion_amount'],
//            'instruction' => $params['instruction'],
//            'picture' => $params['picture'],
//            'recipe_source' => $params['recipe_source']
//        );
//
//        //   Kint::dump($params); //debuggaamiseen
//
//        $recipe = new Recipe($attributes);
//        $errors = $recipe->errors();
//
//
//        if (count($errors) > 0) {
//            View::make('recipe/edit.html', array('errors' => $errors, 'attributes' => $attributes));
//        } else {
//            $recipe->update();
//            Redirect::to('/recipe/' . $id, array('message' => 'Reseptiä on muokattu onnistuneesti!'));
//        }
//    }
