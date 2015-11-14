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
        // POST-pyynnön muuttujat sijaitsevat $_POST nimisessä assosiaatiolistassa
        $params = $_POST;
        // Alustetaan uusi Resepti-luokan olion käyttäjän syöttämillä arvoilla
        $recipe = new Resepti(array(
            'nimi' => $params['nimi'],
            'kategoria' => $params['kategoria'],
            'annoksia' => $params['annoksia'],
            'valmistusohje' => $params['valmistusohje'],
            'kuva' => $params['kuva'],
            'lahde' => $params['lahde']
        ));

        // Kutsutaan alustamamme olion save metodia, joka tallentaa olion tietokantaan
        $recipe->save();

        // Ohjataan käyttäjä lisäyksen jälkeen reseptin esittelysivulle
        Redirect::to('/recipe/' . $recipe->id, array('message' => 'Resepti on lisätty reseptipankkiin!'));
    }

    public static function show($id) {
        $recipe = Resepti::find($id);
        View::make('recipe/show.html', array('recipe' => $recipe));
    }

}
