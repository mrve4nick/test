<?php
require_once __DIR__ . "/../models/BasketModel.php";

class BasketController
{
    public function showAction()
    {
        $tmp = View::create("layout", "", []);
        echo BasketModel::reverse($tmp);
    }
}
