<?php

class UnitController extends BaseController {

    public static function index() {
        $units = Unit::all();
        View::make('unit/index.html', array('units' => $units));
    }

    public static function create() {
        self::check_logged_in();
        View::make('unit/new.html');
    }

    public static function store() {
        self::check_logged_in();

        $params = $_POST;

        $attributes = array(
            'unit_name' => $params['unit_name'],
            'information' => $params['information']
        );

        $unit = new Unit($attributes);
        $duplicate = Unit::find($params['unit_name']);

        $errors = $unit->errors();

        if (count($errors) == 0 && $duplicate == null) {
            $unit->save();
            Redirect::to('/unit', array('message' => 'Mittayksikkö lisätty reseptipankkiin.'));
        } else if ($duplicate != null) {
            View::make('unit/new.html', array('attributes' => $attributes, 'message' => 'Mittayksikkö on jo reseptipankissa.'));
        } else {
            View::make('unit/new.html', array('errors' => $errors, 'attributes' => $attributes));
        }
    }

    public static function show($unit_name) {
        $unit = Unit::find($unit_name);
        View::make('unit/show.html', array('unit' => $unit));
    }

    public static function edit($unit_name) {
        self::check_logged_in();
        $unit = Unit::find($unit_name);
        View::make('unit/edit.html', array('attributes' => $unit));
    }

    public static function update($unit_name) {
        self::check_logged_in();
        $params = $_POST;

        $attributes = array(
            'unit_name' => $unit_name,
            'information' => $params['information']
        );
        $unit = new Unit($attributes);
        $errors = $unit->errors();
        if (count($errors) > 0) {
            View::make('unit/edit.html', array('errors' => $errors, 'attributes' => $attributes));
        } else {
            $unit->update();
            Redirect::to('/unit/' . $unit->unit_name, array('message' => 'Mittayksikön tietoja on muokattu onnistuneesti.'));
        }
    }

    public static function destroy($unit_name) {
        self::check_logged_in();
        $unit = new Unit(array('unit_name' => $unit_name));
        $unit->destroy();
        Redirect::to('/unit', array('message' => 'Mittayksikkö on poistettu reseptipankista.'));
    }

}
