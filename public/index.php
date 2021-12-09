<?php

    require_once __DIR__ . "/../framework/core/ExceptionHandler.php";
    require_once __DIR__ . "/../framework/core/ErrorHandlers.php";
    require_once __DIR__ . "/../framework/Session.php";
    require_once __DIR__ . "/../framework/Router.php";
    require_once __DIR__ . "/../framework/core/View.php";

    //set_error_handler("MyErrorHandler");
    //register_shutdown_function("myFatalErrorHandler");

    Session::start();

    $router = new Router();
    try {
        $routerInfo = $router->run();
    } catch (Exception $e) {
//        echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
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
