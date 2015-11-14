<?php

$routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
});

//Etusivu (reseptien listaussivu)
$routes->get('/', function() {
    RecipeController::index();
});

// Reseptien listaussivu
$routes->get('/recipe', function() {
    RecipeController::index();
});

// Reseptin lisääminen tietokantaan
$routes->post('/recipe', function() {
    RecipeController::store();
});

// Reseptin lisäyslomakkeen näyttäminen
$routes->get('/recipe/new', function() {
    RecipeController::create();
});

//Reseptin esittelysivu
$routes->get('/recipe/:id', function($id) {
    RecipeController::show($id);
});

// Reseptin lisäyssivu EI VIELÄ
//$routes->get('/recipe/new', function($id) {
//    RecipeController::new();
//});
//VANHAT:
//$routes->get('/', function() {
//    HelloWorldController::index();
//});
//$routes->get('/recipe', function() {
//    HelloWorldController::recipe_list();
//});
//$routes->get('/recipe/1', function() {
//    HelloWorldController::recipe_show();
//});
//$routes->get('/recipe/2', function() {
//    HelloWorldController::recipe_edit();
//});
//
$routes->get('/login', function() {
    HelloWorldController::login();
});
