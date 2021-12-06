<?php

class Item
{
    public $name;
    public $code;
    public $category;
    public $vendor;
    public $price;
    public $specifications;
    public $quantity;

    public function __construct($path) {
        $this->assign($this->decode($this->read($path)));
    }

    public function read($path) {
        $file = file($path);
        if (count($file) >= 1) {
            return $file;
        }

        return false;
    }

    public function decode($items) {
        foreach ($items as &$item) {
            $item = (array)json_decode($item);
        }

        return $items;
    }

    public function assign($items) {
        foreach ($items as $item) {
           foreach ($item as $key => $val) {
                   $this->$key = $val;
           }
        }
    }
}