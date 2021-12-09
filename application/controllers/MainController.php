<?php
namespace App\controllers;

use App\models\MainModel;
use Framework\core\View;

class MainController
{
    public function mainAction()
    {
        $tmp = View::create("layout", "", []);
        echo MainModel::reverse($tmp);
    }
}
