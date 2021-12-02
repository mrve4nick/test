<?php
    require_once "../application/core/Session.class.php";
    require_once "../inc/autoloader.inc.php";
    require_once "../application/core/Router.class.php";
    require_once "../application/core/View.class.php";

    Session::start();

    $router = new Router();
    $router->run();
