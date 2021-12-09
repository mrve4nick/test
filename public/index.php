<?php

    require_once __DIR__ . "/../vendor/autoload.php";
    require_once __DIR__ . "/../framework/core/ExceptionHandler.php";
    require_once __DIR__ . "/../framework/core/ErrorHandlers.php";

    \Framework\Session::start();

    use Framework\Router;



    $router = new Router();
    try {
        $routerInfo = $router->run();
    } catch (Exception $e) {
        echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
    } finally {
        header("HTTP/1.0 404 Not Found");
    }


    $controller = new $routerInfo["controller"](
        $routerInfo["params"],
        $routerInfo["query"]
    );

    if (!empty($routerInfo["query"])) {
        foreach ($routerInfo["query"] as $action => $param) {
            $controller->$param();
        }
    }
    $action = $routerInfo["action"];
    $controller->$action();
