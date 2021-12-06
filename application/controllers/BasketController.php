<?php
    require_once __DIR__ . "/../core/Controller.class.php";

    class BasketController extends Controller {
        public function showAction() {
            View::draw(__DIR__ . "/../../public/view/template_main.php", ["{BREADCRUMBS}" => __DIR__ . "/../../public/view/breadcrumbs.php",
                "{ASIDE}" => __DIR__ . "/../../public/view/nav_aside.php",
                "{MAIN_CONTENT}" => __DIR__ . "/../../public/view/basket.php",
                "{OTHER}" => ""], __DIR__ . "/../../public/view/layout.php");
        }
    }