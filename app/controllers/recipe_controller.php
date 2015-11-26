<?php

class RecipeController extends BaseController {

    //KORJATTAVAA: RECIPEINGREDIENT(CONTROLLER) ERRORIEN VÄLITYS? 
    //MITEN RESEPTILLE SAA LISÄTTYÄ USEAMMAN RAAKA-AINEEN KERRALLAAN?

    public static function index() {
        $recipes = Recipe::all();
        View::make('recipe/index.html', array('recipes' => $recipes));
    }

    public static function create() {
        self::check_logged_in();
        $ingredients = Ingredient::all();
        $categories = Category::all();
        $units = Unit::all();
        View::make('recipe/new.html', array('ingredients' => $ingredients, 'categories' => $categories, 'units' => $units));
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
        $categories = Category::all();
        $units = Unit::all();

        $recipe = new Recipe($attributes);
        $errors = $recipe->errors();

        if (count($errors) == 0) {
            $recipe->save();
            RecipeIngredientController::store($recipe->id, $params['amount'], $params['unit'], $params['ingredient']);
            Redirect::to('/recipe/' . $recipe->id, array('message' => 'Resepti on lisätty reseptipankkiin.'));
        } else {
            View::make('recipe/new.html', array('errors' => $errors, 'attributes' => $attributes,
                'recipe_ingredients' => $recipe_ingredients, 'ingredients' => $ingredients, 'categories' => $categories, 'units' => $units));
        }
    }

    public static function show($id) {
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
        $units = Unit::all();
        View::make('recipe/edit.html', array('attributes' => $recipe, 'recipe_ingredients' => $recipe_ingredients, 'ingredients' => $ingredients, 'units' => $units));
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

    public static function search() {
        $param = $_POST;

        $search = $param['search'];
        $recipes = Recipe::search($search);

        View::make('recipe/search.html', array('search' => $search, 'recipes' => $recipes));
    }

    public static function destroy($id) {
        self::check_logged_in();
        $recipe = new Recipe(array('id' => $id));
        $recipe->destroy();

        Redirect::to('/recipe', array('message' => 'Resepti on poistettu onnistuneesti.'));
    }

}
