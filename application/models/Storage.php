<?php

class Storage {
    public static function get() {
        return $storage = [
            [
                "code" => 1,
                "img" => "#",
                "category" => "Телефоны",
                "vendor" => "Apple",
                "name" => "Iphone 13",
                "price" => 10000,
                "specifications" => [
                    "color" => "black",
                    "RAM" => "128"
                ],
                "quantity" => 100
            ],
            [
                "code" => 2,
                "img" => "#",
                "category" => "Телефоны",
                "vendor" => "Samsung",
                "name" => "Galaxy S21",
                "price" => 9500,
                "specifications" => [
                    "color" => "white",
                    "RAM" => "128"
                ],
                "quantity" => 50
            ],
            [
                "code" => 3,
                "img" => "#",
                "category" => "Телефоны",
                "vendor" => "Xiaomi",
                "name" => "Redmi Note 9",
                "price" => 3000,
                "specifications" => [
                    "color" => "green",
                    "RAM" => "64"
                ],
                "quantity" => 10
            ],
            [
                "code" => 4,
                "img" => "#",
                "category" => "Телефоны",
                "vendor" => "OnePlus",
                "name" => "7",
                "price" => 7000,
                "specifications" => [
                    "color" => "black",
                    "RAM" => "256"
                ],
                "quantity" => 0
            ],
            [
                "code" => 5,
                "img" => "#",
                "category" => "Телефоны",
                "vendor" => "Huawei",
                "name" => "P40 Lite",
                "price" => 10000,
                "specifications" => [
                    "color" => "black",
                    "RAM" => "128"
                ],
                "quantity" => 30
            ]
        ];
    }
}