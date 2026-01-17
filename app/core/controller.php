<?php

namespace App\Core;

abstract class Controller {

    public function model($model){
        if (file_exists('../app/models/' . $model . '.php')) {
            require_once '../app/models/' . $model . '.php';
            $className = "App\\Models\\" . $model;
            return new $className();
        }
        return null;
    }

    public function view($view, $data = []) {
        if (!empty($data)) {
            extract($data);
        }

        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
        } else {
            die("View does not exist: " . $view);
        }
    }
}