<?php

/**
 * Created by PhpStorm.
 * User: JohnMM2014
 * Date: 2/23/16
 * Time: 1:53 PM
 */
class controller
{
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}