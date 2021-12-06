<?php

    require_once "../application/core/Session.class.php";
    require_once "../inc/autoloader.inc.php";
    require_once "../application/core/Router.class.php";
    require_once "../application/core/View.class.php";
    require_once "../application/core/ErrorHandlers.php";
    require_once "../application/core/ExceptionHandler.php";
    require "../vendor/autoload.php";

    set_error_handler("MyErrorHandler");
    register_shutdown_function("myFatalErrorHandler");

    function test($arr) {
        try {
            if (empty($arr)) {
                throw new ExceptionHandler();
            }
        } catch (ExceptionHandler $e) {
            $e->errorLog();
        }
    }

    test([]);



    Session::start();

    $router = new Router();
    $router->run();
