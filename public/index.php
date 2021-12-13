<?php

    require_once __DIR__ . "/../vendor/autoload.php";

    use Framework\core\ExceptionHandler;
    use Framework\Router;

    \Framework\core\ErrorHandler::myErrorHandler();
    \Framework\Session::start();

    $exceptionHanlder = new ExceptionHandler();
    $exceptionHanlder->exceptionLog();


    $router = new Router();
    try {
        $routerInfo = $router->run();
    } catch (Exception $e) {
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
