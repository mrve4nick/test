<?php

require_once __DIR__ . "/../core/Login.php";

class AccountController
{
    protected $params = [];
    protected $query = [];

    public function __construct($params, $query) {
        $this->params = $params;
        $this->query = $query;
    }

    public function loginAction()
    {
        $tmp = View::create("layout", "", []);

        while (View::parse($tmp)) {
            foreach (View::parse($tmp) as $template) {
                $t = View::create(
                    "",
                    $template,
                    [
                        ["aside" => "nav", "content" => "login"]
                    ]
                );
                $tmp = View::assign($t, $template, $tmp);
            }
        }

        echo $tmp;
    }

    public function profileAction()
    {
        $tmp = View::create("layout", "", []);

        while (View::parse($tmp)) {
            foreach (View::parse($tmp) as $template) {
                $t = View::create(
                    "",
                    $template,
                    [
                        ["aside" => "nav", "content" => "login"]
                    ]
                );
                $tmp = View::assign($t, $template, $tmp);
            }
        }

        echo $tmp;
    }

    public function signin() {
        Login::signin($_POST["email"], $_POST["pass"]);
    }

    public function logout() {
        Login::logout();
    }
}
