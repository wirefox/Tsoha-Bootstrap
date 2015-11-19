<?php

class RecipeController extends BaseController {

    public static function index() {
        $recipes = Recipe::all();
        View::make('recipe/index.html', array('recipes' => $recipes));
    }

    public static function create() {
        View::make('recipe/new.html');
    }

    public static function store() {
        $params = $_POST;
        $attributes = array(
            'recipe_name' => $params['recipe_name'],
            'category' => $params['category'],
            'portion_amount' => $params['portion_amount'],
            'instruction' => $params['instruction'],
            'picture' => $params['picture'],
            'recipe_source' => $params['recipe_source']
        );

        $recipe = new Recipe($attributes);
        $errors = $recipe->errors();

        if (count($errors) == 0) {
            $recipe->save();

            Redirect::to('/recipe/' . $recipe->id, array('message' => 'Resepti on lisätty reseptipankkiin!'));
        } else {
            View::make('recipe/new.html', array('errors' => $errors, 'attributes' => $attributes));
        }
    }

    public static function show($id) {
        $recipe = Recipe::find($id);
        View::make('recipe/show.html', array('recipe' => $recipe));
    }

    //muokkauslomakkeen esittäminen:
    public static function edit($id) {
        $recipe = Recipe::find($id);
        View::make('recipe/edit.html', array('attributes' => $recipe));
    }

    //muokkauslomakkeen käsittely:
    public static function update($id) {
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

        //   Kint::dump($params); //debuggaamiseen

        $recipe = new Recipe($attributes);
        $errors = $recipe->errors();


        if (count($errors) > 0) {
            View::make('recipe/edit.html', array('errors' => $errors, 'attributes' => $attributes));
        } else {
            $recipe->update();
            Redirect::to('/recipe/' . $id, array('message' => 'Reseptiä on muokattu onnistuneesti!'));
        }
    }

    public static function destroy($id) {
        $recipe = new Recipe(array('id' => $id));
        $recipe->destroy();

        Redirect::to('/recipe', array('message' => 'Resepti on poistettu onnistuneesti.'));
    }

}
