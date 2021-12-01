<?php
    require_once "autoloader.inc.php";
    require_once "storage.inc.php";

    function generateProductCard($product) {
        return <<<CARD
          <div class="card" style="width: 18rem;">
            <img src="imgs/prod.jpeg" class="card-imgs-top" alt="Товар"/>
            <div class="card-body">
              <h5 class="card-title">$product->vendor $product->name</h5>
              <span class="h4">$product->price грн</span>
              <a href="#" class="btn btn-primary">Купить</a>
            </div>
          </div>
CARD;
    }

    function getProductsList($products) {
        $res = "";
        foreach($products as $code => $item) {
            if ($GLOBALS["storage"][$code] > 0)
                $res .= generateProductCard($item);
        }
        return $res;
    }

$iphone13 = new Item("Iphone 13", 1, "Телефоны", "Apple", 10000, true, ["color"=>"Black",
                                                                                                                  "ROM"=>128]);
$galaxyS21= new Item("Galaxy S21", 2, "Телефоны", "Samsung", 8000, true, ["color"=>"Gray",
    "ROM"=>128]);

$redmiNote9 = new Item("Redmi Note 9", 3, "Телефоны", "Xiaomi", 2000, true, ["color"=>"Gray",
    "ROM"=>128]);

$p40Lite = new Item("P40 Lite", 4, "Телефоны", "Huawei", 2500, true, ["color"=>"Green",
    "ROM"=>128]);

$onePlus7 = new Item("7", 5, "Телефоны", "OnePlus", 5500, true, ["color"=>"Gray",
    "ROM"=>256]);

$products = [$iphone13->code => $iphone13,
             $galaxyS21->code => $galaxyS21,
             $redmiNote9->code => $redmiNote9,
             $p40Lite->code => $p40Lite,
             $onePlus7->code => $onePlus7];
