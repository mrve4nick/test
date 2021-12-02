<?php

class Router {
    protected $routes = [];
    protected $params = [];

    public function __construct() {
        $arr = require_once __DIR__ . "/../../inc/routes.inc.php";
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $params) {
        $this->routes[$route] = $params;
    }

    public function match() {
        $url = trim($_SERVER["REQUEST_URI"], "/");
        if (array_key_exists($url, $this->routes)) {
            $this->params = $this->routes[$url];
            return true;
        }

        return false;
    }

    public function run(){
        if ($this->match()) {
            $path =  __DIR__ . "/../controllers/" . ucfirst($this->params["controller"]) . "Controller.php";
            $name = ucfirst($this->params["controller"]) . "Controller";
            if (file_exists($path)) {
                require_once $path;
                $action = $this->params["action"] . "Action";
                if (method_exists($name, $action)) {
                    $controller = new $name($this->params);
                    $controller->$action();

                } else {
                    echo "Action doesn't exist <br/>";
                }
            } else {
                echo "Controller doesn't exist<br/>";
            }
        }
    }
}