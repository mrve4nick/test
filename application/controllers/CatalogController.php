<?php
require_once __DIR__ . "/../models/CatalogModel.php";
require_once __DIR__ . "/../models/Item.php";

class CatalogController
{
    public function showAction()
    {
        $tmp = View::create("layout", "", []);
        echo CatalogModel::reverse($tmp);
    }
}
