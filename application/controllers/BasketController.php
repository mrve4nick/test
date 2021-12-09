<?php
namespace App\controllers;

use App\models\BasketModel;
use Framework\core\View;

class BasketController
{
    public function showAction()
    {
        $tmp = View::create("layout", "", []);
        echo BasketModel::reverse($tmp);
    }
}
