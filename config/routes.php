<?php

//LOGIN & LOGOUT:
$routes->get('/login', function() {
    // Kirjautumislomakkeen esittäminen
    UserController::login();
});

$routes->post('/login', function() {
    // Kirjautumisen käsittely
    UserController::handle_login();
});

$routes->post('/logout', function() {
    UserController::logout();
});

//RESEPTIN REITIT:
//Etusivu (reseptien listaussivu)
$routes->get('/', function() {
    RecipeController::index();
});

// Reseptien listaussivu
$routes->get('/recipe', function() {
    RecipeController::index();
});

// Reseptin lisäyslomakkeen näyttäminen
$routes->get('/recipe/new', function() {
    RecipeController::create();
});

// Reseptin lisääminen tietokantaan
$routes->post('/recipe', function() {
    RecipeController::store();
});

//Reseptin esittelysivu
$routes->get('/recipe/:id', function($id) {
    RecipeController::show($id);
});

//Reseptin muokkauslomakkeen näyttäminen
$routes->get('/recipe/:id/edit', function($id) {
    RecipeController::edit($id);
});

//Reseptin päivittäminen 
$routes->post('/recipe/:id/edit', function($id) {
    RecipeController::update($id);
});

//Reseptin poistaminen:
$routes->post('/recipe/:id/destroy', function($id) {
    RecipeController::destroy($id);
});

//HELLOWORLDCONTROLLERIN REITTI
$routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
});

$routes->get('/login', function() {
    HelloWorldController::login();
});

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
//HelloWorld kontrollerin:
