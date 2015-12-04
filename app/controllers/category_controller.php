<?php

class CategoryController extends BaseController {

    public static function index() {
        $categories = Category::all();
        View::make('category/index.html', array('categories' => $categories));
    }

    public static function create() {
        self::check_logged_in();
        View::make('category/new.html');
    }

    public static function store() {
        self::check_logged_in();

        $params = $_POST;

        $attributes = array(
            'category_name' => $params['category_name'],
            'information' => $params['information']
        );

        $category = new Category($attributes);
        $duplicate = Category::find($params['category_name']);

        $errors = $category->errors();

        if (count($errors) == 0 && $duplicate == null) {
            $category->save();
            Redirect::to('/category', array('message' => 'Kategoria lisätty reseptipankkiin.'));
        } else if ($duplicate != null) {
            View::make('category/new.html', array('attributes' => $attributes, 'message' => 'Kategoria on jo aiemmin lisätty reseptipankkiin.'));
        } else {
            View::make('category/new.html', array('errors' => $errors, 'attributes' => $attributes));
        }
    }

    public static function show($category_name) {
        $category = Category::find($category_name);
        View::make('category/show.html', array('category' => $category));
    }

    public static function edit($category_name) {
        self::check_logged_in();
        $category = Category::find($category_name);
        View::make('category/edit.html', array('attributes' => $category));
    }

    public static function update($category_name) {
        self::check_logged_in();
        $params = $_POST;
        $attributes = array(
            'category_name' => $category_name,
            'information' => $params['information']
        );
        $category = new Category($attributes);
        $errors = $category->errors();
        if (count($errors) > 0) {
            View::make('category/edit.html', array('errors' => $errors, 'attributes' => $attributes));
        } else {
            $category->update();
            Redirect::to('/category/' . $category->category_name, array('message' => 'Kategorian tietoja on muokattu onnistuneesti.'));
        }
    }

    public static function destroy($category_name) {
        self::check_logged_in();
        $category = new Category(array('category_name' => $category_name));
        $category->destroy();
        Redirect::to('/category', array('message' => 'Kategoria on poistettu reseptipankista.'));
    }

}
