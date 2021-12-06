<?php
    require_once __DIR__ . "/../core/Controller.class.php";

    class ItemController extends Controller {
        public function itemAction() {
            View::draw(__DIR__ . "/../../public/view/template_item.php", ["{BREADCRUMBS}" => __DIR__ . "/../../public/view/breadcrumbs.php",
                "{MAIN_CONTENT}" => __DIR__ . "/../../public/view/item.php",
                "{OTHER}" => ""], __DIR__ . "/../../public/view/layout.php");
        }
    }