<?php
namespace App\controllers;

use App\models\CatalogModel;
use Framework\core\View;

class CatalogController
{
    public function showAction()
    {
        $tmp = View::create("layout", "", []);
        echo CatalogModel::reverse($tmp);
    }
}
