<?php
    require_once __DIR__ . "/../core/Controller.class.php";

    class MainController extends Controller {
        public function mainAction() {
            View::draw(__DIR__ . "/../../public/view/template_main.php", ["{BREADCRUMBS}" => "",
                "{ASIDE}" => __DIR__ . "/../../public/view/nav_aside.php",
                "{MAIN_CONTENT}" => __DIR__ . "/../../public/view/slider_main.php",
                "{OTHER}" => ""], __DIR__ . "/../../public/view/layout.php");
        }
    }