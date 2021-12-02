<?php
  require_once "../inc/autoloader.inc.php";
  require_once "../application/core/Router.class.php";
  require_once "../application/core/View.class.php";


  $router = new Router();
  $router->run();
?>