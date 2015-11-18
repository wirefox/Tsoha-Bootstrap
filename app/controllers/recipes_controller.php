<?php

class RecipeController extends BaseController {

    public static function index() {
        $reseptit = Resepti::all();
        View::make('recipe/index.html', array('reseptit' => $reseptit));
    }

    public static function create() {
        View::make('recipe/new.html');
    }

    public static function store() {
        $params = $_POST;
        $attributes = array(
            'nimi' => $params['nimi'],
            'kategoria' => $params['kategoria'],
            'annoksia' => $params['annoksia'],
            'valmistusohje' => $params['valmistusohje'],
            'kuva' => $params['kuva'],
            'lahde' => $params['lahde']
        );

        $recipe = new Resepti($attributes);
        $errors = $recipe->errors();

        if (count($errors) == 0) {
            $recipe->save();

            Redirect::to('/recipe/' . $recipe->id, array('message' => 'Resepti on lisätty reseptipankkiin!'));
        } else {
            View::make('recipe/new.html', array('errors' => $errors, 'attributes' => $attributes));
        }
    }

    public static function show($id) {
        $recipe = Resepti::find($id);
        View::make('recipe/show.html', array('recipe' => $recipe));
    }

    //muokkauslomakkeen esittäminen:
    public static function edit($id) {
        $recipe = Resepti::find($id);
        View::make('recipe/edit.html', array('attributes' => $recipe));
    }

    //muokkauslomakkeen käsittely:
    public static function update($id) {
        $params = $_POST;

        $attributes = array(
            'id' => $id,
            'nimi' => $params['nimi'],
            'kategoria' => $params['kategoria'],
            'annoksia' => $params['annoksia'],
            'valmistusohje' => $params['valmistusohje'],
            'kuva' => $params['kuva'],
            'lahde' => $params['lahde']
        );

        //   Kint::dump($params); //debuggaamiseen

        $recipe = new Resepti($attributes);
        $errors = $recipe->errors();


        if (count($errors) > 0) {
            View::make('recipe/edit.html', array('errors' => $errors, 'attributes' => $attributes));
        } else {
            $recipe->update();
            Redirect::to('/recipe/' . $id, array('message' => 'Reseptiä on muokattu onnistuneesti!'));
        }
    }

    public static function destroy($id) {
        $recipe = new Resepti(array('id' => $id));
        $recipe->destroy();

        Redirect::to('/recipe', array('message' => 'Resepti on poistettu onnistuneesti.'));
    }

}
