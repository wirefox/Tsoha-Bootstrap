<?php

require 'app/models/recipe.php';

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
