<?php

class HelloWorldController extends BaseController {

    public static function index() {
        // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
        View::make('home.html');
    }

    public static function sandbox() {
        // Testaa koodiasi täällä
        //echo 'Hello World!';
        //View::make('helloworld.html');
        $resepti = Resepti::find(1);
        $reseptit = Resepti::all();
        // Kint-luokan dump-metodi tulostaa muuttujan arvon
        Kint::dump($reseptit);
        Kint::dump($resepti);
    }


//    public static function sandbox() {
//        $resepti = new Resepti(array(
//            'nimi' => 'kaurakeksi',
//            'kategoria' => 'Makeat leivonnaiset',
//            'annoksia' => '10',
//            'valmistusohje' => 'Valmista keksit näin..',
//            'kuva' => 'https://imaging.stockmann.com/web/HH/267/888/267888_01.jpg?&width=85&profile=146_tr.146_tr.146_tr',
//            'lahde' => 'https://www.hobbyhall.fi/kodinkoneet/siivous-ja-sisailma/polynimurit/dyson-dc35-varsi-rikkaimuri-matress-suulake?'
//        ));
//        $errors = $resepti->errors();
//
//        Kint::dump($errors);
//    }

    public static function recipe_list() {
        View::make('suunnitelmat/recipe_list.html');
    }

    public static function recipe_show() {
        View::make('suunnitelmat/recipe_show.html');
    }

    public static function recipe_edit() {
        View::make('suunnitelmat/recipe_edit.html');
    }

    public static function login() {
        View::make('suunnitelmat/login.html');
    }

}
