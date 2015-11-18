<?php

class User extends BaseModel {

    public $id, $kayttajatunnus, $salasana;

    public function __construct($attributes) {
        parent::__construct($attributes);
    }

    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Kayttaja WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();
        if ($row) {
            $user = new User(array(
                'id' => $row['id'],
                'kayttajatunnus' => $row['kayttajatunnus'],
                'salasana' => $row['salasana']
            ));
            return $user;
        }
        return null;
    }

    public static function authenticate($kayttajatunnus, $salasana) {
        $query = DB::connection()->prepare('SELECT * FROM Kayttaja WHERE kayttajatunnus = :kayttajatunnus '
                . 'AND salasana = :salasana LIMIT 1', array('kayttajatunnus' => $kayttajatunnus, 'salasana' => $salasana));
        $query->execute(array(
            'kayttajatunnus' => $kayttajatunnus,
            'salasana' => $salasana
        ));

        $row = $query->fetch();
        if ($row) {
            $user = new User(array(
                'id' => $row['id'],
                'kayttajatunnus' => $row['kayttajatunnus'],
                'salasana' => $row['salasana']
            ));
            return $user;
        } else {
            return null;
        }
    }

}
