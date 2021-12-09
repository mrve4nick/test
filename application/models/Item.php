<?php

class Item
{
    public $code;
    public $img;
    public $category;
    public $vendor;
    public $name;
    public $price;
    public $specifications;
    public $quantity;

    public function __construct($code, $img, $category, $vendor, $name, $price, $specifications, $quantity)
    {
        $this->code = $code;
        $this->img = $img;
        $this->category = $category;
        $this->vendor = $vendor;
        $this->name = $name;
        $this->price = $price;
        $this->specifications = $specifications;
        $this->quantity = $quantity;
    }

    public static function get()
    {
        $items = file_get_contents(__DIR__ . "/../../src/storage.json");
        $items = json_decode($items);

        //convert obj to arr
        foreach ($items as $item) {
            $item->specifications = (array) $item->specifications;
        }
        return $items;
    }
}
