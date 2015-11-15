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
        $recipe = new Resepti(array(
            'nimi' => $params['nimi'],
            'kategoria' => $params['kategoria'],
            'annoksia' => $params['annoksia'],
            'valmistusohje' => $params['valmistusohje'],
            'kuva' => $params['kuva'],
            'lahde' => $params['lahde']
        ));

        $recipe->save();

        Redirect::to('/recipe/' . $recipe->id, array('message' => 'Resepti on lisätty reseptipankkiin!'));
    }

    public static function show($id) {
        $recipe = Resepti::find($id);
        View::make('recipe/show.html', array('recipe' => $recipe));
    }

    public static function edit($id) {
        $recipe = Resepti::find($id);
        View::make('recipe/edit.html', array('attributes' => $recipe));
    }

    public static function update($id) {
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

        $recipe->update();
        Redirect::to('/recipe/'. $recipe->id, array('message' => 'Reseptiä on muokattu onnistuneesti.'));
    }

}
