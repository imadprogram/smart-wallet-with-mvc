<?php

namespace App\Core;

class App {
    private $controller = 'DashboardController';
    private $method = 'index';
    private $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        if(!empty($url[0]) && file_exists('../app/controllers/'.ucwords($url[0]).'Controller.php')){
            $this->controller = ucwords($url[0]).'Controller';
            unset($url[0]);
        }

        $className = "App\\Controllers\\" . $this->controller;
        $this->controller = new $className;

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
        return [];
    }
}