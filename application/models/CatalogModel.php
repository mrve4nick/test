<?php
namespace App\models;

use Framework\core\Model;
use Framework\core\View;
use App\models\Item;

class CatalogModel extends Model
{
    public static function reverse($tmp)
    {
        $items = [];
        while (View::parse($tmp)) {
            foreach (View::parse($tmp) as $templateName) {
                if ($templateName == "products") {
                    foreach (Item::get() as $item) {
                        $items[] = new Item(
                            $item->code,
                            $item->img,
                            $item->category,
                            $item->vendor,
                            $item->name,
                            $item->price,
                            $item->specifications,
                            $item->quantity
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
        return $tmp;
    }
}
