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

//Reseptin muokkaaminen
$routes->get('/recipe/:id/edit', function($id) {
    RecipeController::edit($id);
});

//Reseptin päivittäminen 
$routes->post('/recipe/:id/edit', function($id) {
    RecipeController::update($id);
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
$routes->get('/login', function() {
    HelloWorldController::login();
});
