<?php

//LOGIN & LOGOUT:
$routes->get('/login', function() {
// Kirjautumislomakkeen esittäminen
    UserController::login();
});

$routes->post('/login', function() {
    UserController::handle_login();
});

$routes->post('/logout', function() {
    UserController::logout();
});

//RECIPE:
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

//INGREDIENT:
$routes->get('/ingredient', function() {
    IngredientController::index();
});

$routes->get('/ingredient/new', function() {
    IngredientController::create();
});

$routes->post('/ingredient', function() {
    IngredientController::store();
});

$routes->get('/ingredient/:ingredient_name', function($ingredient_name) {
    IngredientController::show($ingredient_name);
});

$routes->get('/ingredient/:ingredient_name/edit', function($ingredient_name) {
    IngredientController::edit($ingredient_name);
});
$routes->post('/ingredient/:ingredient_name/edit', function($ingredient_name) {
    IngredientController::update($ingredient_name);
});

$routes->post('/ingredient/:ingredient_name/destroy', function($ingredient_name) {
    IngredientController::destroy($ingredient_name);
});

// RECIPE_INGREDIENT:
$routes->get('/recipe/:id/recipe_ingredient', function($id) {
    RecipeIngredientController::create($id);
});

$routes->post('/recipe/:id/recipe_ingredient', function($id) {
    RecipeIngredientController::storeNewRecipeIngredient($id);
});

// CATEGORY:
$routes->get('/category', function() {
    CategoryController::index();
});

$routes->get('/category/new', function() {
    CategoryController::create();
});

$routes->post('/category', function() {
    CategoryController::store();
});

$routes->get('/category/:category_name', function($category_name) {
    CategoryController::show($category_name);
});

$routes->get('/category/:category_name/edit', function($category_name) {
    CategoryController::edit($category_name);
});

$routes->post('/category/:category_name/edit', function($category_name) {
    CategoryController::update($category_name);
});

$routes->post('/category/:category_name/destroy', function($category_name) {
    CategoryController::destroy($category_name);
});

//UNIT:
$routes->get('/unit', function() {
    UnitController::index();
});

$routes->get('/unit/new', function() {
    UnitController::create();
});

$routes->post('/unit', function() {
    UnitController::store();
});

$routes->get('/unit/:unit_name', function($unit_name) {
    UnitController::show($unit_name);
});

$routes->get('/unit/:unit_name/edit', function($unit_name) {
    UnitController::edit($unit_name);
});
$routes->post('/unit/:unit_name/edit', function($unit_name) {
    UnitController::update($unit_name);
});

$routes->post('/unit/:unit_name/destroy', function($unit_name) {
    UnitController::destroy($unit_name);
});

//RECIPE SEARCH:
$routes->post('/recipe/search', function() {
    RecipeController::search();
});

//HELLOWORLDCONTROLLER:
$routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
});

$routes->get('/login', function() {
    HelloWorldController::login();
});
