<?php
    require_once __DIR__ . "/../core/Controller.class.php";
    require_once __DIR__ . "/../core/Login.class.php";

    class AccountController extends Controller {
        protected $params = [];
        protected $query = [];

        public function __construct($params, $query) {
            $this->params = $params;
            $this->query = $query;
        }

        public function loginAction() {
            View::draw(__DIR__ . "/../../public/view/template_main.php", ["{BREADCRUMBS}" => __DIR__ . "/../../public/view/breadcrumbs.php",
                "{ASIDE}" => __DIR__ . "/../../public/view/nav_aside.php",
                "{MAIN_CONTENT}" => __DIR__ . "/../../public/view/login.php",
                "{OTHER}" => ""], __DIR__ . "/../../public/view/layout.php");
        }

        public function profileAction() {
            if(Session::get("succes")) {
                View::draw(__DIR__ . "/../../public/view/template_main.php", ["{BREADCRUMBS}" => __DIR__ . "/../../public/view/breadcrumbs.php",
                    "{ASIDE}" => __DIR__ . "/../../public/view/nav_aside.php",
                    "{MAIN_CONTENT}" => __DIR__ . "/../../public/view/profile.php",
                    "{OTHER}" => ""], __DIR__ . "/../../public/view/layout.php");
            } else {
                header("Location: /account/login");
            }
        }

        public function signin() {
            Login::signin($_POST["email"], $_POST["pass"]);
        }

        public function logout() {
            Login::logout();
        }
    }