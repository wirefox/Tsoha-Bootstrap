<?php

class IngredientController extends BaseController {

    public static function index() {
        $ingredients = Ingredient::all();
        View::make('ingredient/index.html', array('ingredients' => $ingredients));
    }

    public static function create() {
        self::check_logged_in();
        View::make('ingredient/new.html');
    }

    public static function store() {
        self::check_logged_in();

        $params = $_POST;

        $attributes = array(
            'ingredient_name' => $params['ingredient_name'],
            'nutrition' => $params['nutrition']
        );

        $ingredient = new Ingredient($attributes);
        $duplicate = Ingredient::find($params['ingredient_name']);

        $errors = $ingredient->errors();

        if (count($errors) == 0 && $duplicate == null) {
            $ingredient->save();
            Redirect::to('/ingredient', array('message' => 'Raaka-aine lisätty reseptipankkiin.'));
        } else if ($duplicate != null) {
            View::make('ingredient/new.html', array('attributes' => $attributes, 'message' => 'Raaka-aine on jo reseptipankissa.'));
        } else {
            View::make('ingredient/new.html', array('errors' => $errors, 'attributes' => $attributes));
        }
    }

    public static function show($ingredient_name) {
        $ingredient = Ingredient::find($ingredient_name);
        View::make('ingredient/show.html', array('ingredient' => $ingredient));
    }

    public static function edit($ingredient_name) {
        self::check_logged_in();
        $ingredient = Ingredient::find($ingredient_name);
        View::make('ingredient/edit.html', array('attributes' => $ingredient));
    }

    public static function update($ingredient_name) {
        self::check_logged_in();
        $params = $_POST;
        $attributes = array(
            'ingredient_name' => $ingredient_name,
            'nutrition' => $params['nutrition']
        );
        $ingredient = new Ingredient($attributes);
        $errors = $ingredient->errors();
        if (count($errors) > 0) {
            View::make('ingredient/edit.html', array('errors' => $errors, 'attributes' => $attributes));
        } else {
            $ingredient->update();
            Redirect::to('/ingredient/' . $ingredient->ingredient_name, array('message' => 'Raaka-aineen tietoja on muokattu onnistuneesti.'));
        }
    }

    public static function destroy($ingredient_name) {
        self::check_logged_in();
        $ingredient = new Ingredient(array('ingredient_name' => $ingredient_name));
        $ingredient->destroy();
        Redirect::to('/ingredient', array('message' => 'Raaka-aine on poistettu reseptipankista.'));
    }

}
