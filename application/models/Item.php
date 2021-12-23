<?php

namespace App\models;

use Framework\core\Database;

class Item
{
    public $code;
    public $img;
    public $category;
    public $vendor;
    public $name;
    public $price;
    public $specifications;
    public $balance;

    public function __construct($code, $img, $category, $vendor, $name, $price, $specifications, $balance)
    {
        $this->code = $code;
        $this->img = $img;
        $this->category = $category;
        $this->vendor = $vendor;
        $this->name = $name;
        $this->price = $price;
        $this->specifications = $specifications;
        $this->balance = $balance;
    }

    public static function getAll()
    {
        $db = Database::connect();

        $products = mysqli_query($db, "SELECT * FROM products");

        $items = [];

        while ($item = mysqli_fetch_assoc($products)) {
            $items[] = $item;
        }

        return $items;
    }
}
