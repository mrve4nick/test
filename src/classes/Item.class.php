<?php

class Item
{
    public $name;
    public $code;
    public $category;
    public $vendor;
    public $price;
    public $availability;
    public $specifications;

    public function __construct($name, $code, $category, $vendor, $price, $availability, $specifications) {
        $this->name = $name;
        $this->code = $code;
        $this->category = $category;
        $this->vendor = $vendor;
        $this->price = $price;
        $this->availability = $availability;
        $this->specifications = $specifications;
    }
}