<?php
namespace App\controllers;

use App\models\AccountModel;
use App\models\ProfileModel;
use Framework\core\View;
use Framework\core\Login;


class AccountController
{
    protected $params = [];
    protected $query = [];

    public function __construct($params, $query)
    {
        $this->params = $params;
        $this->query = $query;
    }

    public function loginAction()
    {
        $tmp = View::create("layout", "", []);
        echo AccountModel::reverse($tmp);
    }

    public function profileAction()
    {
        $tmp = View::create("layout", "", []);
        echo ProfileModel::reverse($tmp);
    }

    public function signin()
    {
        Login::signin($_POST["email"], $_POST["pass"]);
    }

    public function logout()
    {
        Login::logout();
    }
}
