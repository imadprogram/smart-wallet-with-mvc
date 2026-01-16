<?php

namespace App\Core;



class App {
    private $path;
    private $controller = 'dashboardController';
    private $method = 'index';
    private $params = [];


    public function __construct() {
        $url = $this->parseUrl();

        if(!empty($url[0]) && file_exists('../app/controllers/'.ucwords($url[0]).'Controller.php')){
            $this->controller = ucwords($url[0]).'Controller';

            unset($url[0]);
        }

        require_once '../app/controllers/'. $this->controller .'.php';

        $className = "App\\Controllers\\" . $this->controller;

        $this->controller = new $className;
    }

    public function parseUrl() {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'] , '/');
            $url = filter_var($url , FILTER_SANITIZE_URL);
            return explode('/' , $url);
        }
        return [];
    }

}