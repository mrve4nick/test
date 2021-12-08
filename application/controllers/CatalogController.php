<?php

require_once __DIR__ . "/../models/Item.php";
require_once __DIR__ . "/../models/Storage.php";

class CatalogController
{
    public function showAction()
    {
        $items = [];
        $tmp = View::create("layout", "", []);

        while (View::parse($tmp)) {
            foreach (View::parse($tmp) as $templateName) {
                if ($templateName == "products") {
                    foreach (Storage::get() as $item) {
                        $items[] = new Item(
                            $item["code"],
                            $item["img"],
                            $item["category"],
                            $item["vendor"],
                            $item["name"],
                            $item["price"],
                            $item["specifications"],
                            $item["quantity"]
                        );
                    }

                    foreach ($items as $item) {
                        $template .= View::create(
                            "",
                            "card",
                            [
                                [],
                                ["vendor" => $item->vendor, "name" => $item->name, "price" => $item->price]
                            ]
                        );
                    }
                } else {
                    $template = View::create(
                        "",
                        $templateName,
                        [
                            ["aside" => "filter", "content" => "catalog"]
                        ]
                    );
                }
                $tmp = View::assign($template, $templateName, $tmp);
            }
        }
        echo $tmp;
    }
}
