<?php
require_once __DIR__ . "/../models/MainModel.php";

class MainController
{
    public function mainAction()
    {
        $tmp = View::create("layout", "", []);
        echo MainModel::reverse($tmp);
    }
}
