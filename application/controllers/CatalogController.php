<?php
    require_once __DIR__ . "/../core/Controller.class.php";
    require_once __DIR__ . "/../models/ItemModel.php";

    class CatalogController extends Controller {
        public $items = [];

        public function showAction() {
            View::draw(__DIR__ . "/../../public/view/template_main.php", ["{BREADCRUMBS}" => __DIR__ . "/../../public/view/breadcrumbs.php",
                "{ASIDE}" => __DIR__ . "/../../public/view/product_filter.php",
                "{MAIN_CONTENT}" => __DIR__ . "/../../public/view/catalog.php",
                "{PRODUCTS}" => __DIR__ . "/../../public/view/product_filter.php",
                "{OTHER}" => ""], __DIR__ . "/../../public/view/layout.php");
        }
    }