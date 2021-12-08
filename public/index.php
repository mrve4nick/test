<?php
    require_once __DIR__ . "/../application/core/ExceptionHandler.php";
    require_once __DIR__ . "/../application/core/ErrorHandlers.php";
    require_once __DIR__ . "/../application/core/Session.php";
    require_once __DIR__ . "/../application/core/Router.php";
    require_once __DIR__ . "/../application/core/View.php";
    require_once __DIR__ . "/../application/controllers/MainController.php";

    set_error_handler("MyErrorHandler");
    register_shutdown_function("myFatalErrorHandler");
    function ttt() {
        include_once "fsadf";
    }

    function ddd() {
        ttt();
    }

    ddd();

    //fsdaf;

    Session::start();
    $router = new Router();
    $router->run();