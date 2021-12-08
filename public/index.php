<?php

    require_once __DIR__ . "/../application/core/Session.php";
    require_once __DIR__ . "/../application/core/Router.php";
    require_once __DIR__ . "/../application/core/View.php";
    require_once __DIR__ . "/../application/controllers/MainController.php";


    $router = new Router();
    $router->run();