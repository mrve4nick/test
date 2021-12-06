<?php

class CatalogModel {
    public function generateProductCard($product) {
        return <<<CARD
            <div class="card" style="width: 18rem;">
              <img src="../../imgs/prod.jpeg" class="card-imgs-top" alt="Товар"/>
              <div class="card-body">
                <h5 class="card-title">$product->vendor $product->name</h5>
                <span class="h4">$product->price грн</span>
                <a href="#" class="btn btn-primary">Купить</a>
              </div>
            </div>
CARD;
    }

    public function getProductsList($products) {
        $res = "";
        foreach($products as $code => $item) {
            if ($GLOBALS["storage"][$code] > 0)
                $res .= generateProductCard($item);
        }
        return $res;
    }
}