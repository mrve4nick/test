<?php
  require_once __DIR__ . "/../../src/models/products_init.php";
  require_once __DIR__ . "/../../src/models/products.inc.php";
  require_once __DIR__ . "/../../inc/storage.inc.php";

  function generateProductCard($product) {
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

  function getProductsList($products) {
      $res = "";
      foreach($products as $code => $item) {
          if ($GLOBALS["storage"][$code] > 0)
              $res .= generateProductCard($item);
      }
      return $res;
  }
?>
<section class="catalog">
  <h2 class="h1">Смартфоны</h2>
  <div class="product-list">
      <?php echo getProductsList($products);?>
  </div>
</section>