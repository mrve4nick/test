<?php

    require_once __DIR__ . "/../vendor/autoload.php";

    use ve4nick\logger\ExceptionHandler;
    use Framework\Router;

    \ve4nick\logger\ErrorHandler::myErrorHandler();
    \Framework\Session::start();

    $exceptionHandler = new ExceptionHandler();
    $exceptionHandler->exceptionLog();

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
