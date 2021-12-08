<?php

class Router
{
    protected $routes = [];
    protected $params = [];
    protected $query = [];

    public function __construct()
    {
        $arr = require_once __DIR__ . "/routes.php";
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    public function match()
    {
        $url = trim(parse_url($_SERVER["REQUEST_URI"])["path"], "/");

        if (!empty(parse_url($_SERVER["REQUEST_URI"])["query"])) {
            $this->query = parse_url($_SERVER["REQUEST_URI"])["query"];
            parse_str($this->query, $this->query);
        }

        if (array_key_exists($url, $this->routes)) {
            $this->params = $this->routes[$url];
            return true;
        }

        return false;
    }

    public function run()
    {
        if ($this->match()) {
            $path =  __DIR__ . "/../controllers/" . ucfirst($this->params["controller"]) . "Controller.php";
            $name = ucfirst($this->params["controller"]) . "Controller";
            if (file_exists($path)) {
                require_once $path;
                $action = $this->params["action"] . "Action";
                if (method_exists($name, $action)) {
                    $controller = new $name($this->params, $this->query);
                    if (!empty($this->query)) {
                        foreach ($this->query as $action => $param) {
                            $controller->$param();
                        }
                    }
                    $controller->$action();
                } else {
                    echo "Action doesn't exist <br/>";
                }
            } else {
                echo "Controller doesn't exist<br/>";
            }
        } else {
            header("HTTP/1.0 404 Not Found");
        }
    }
}
