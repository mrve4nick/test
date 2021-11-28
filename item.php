<!DOCTYPE html>
<html lang="ru">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <title>Каталог товаров</title>
</head>
<body>
<div class="container">
  <?php
      require_once "template-parts/header.php";
  ?>
  <div class="row nav-top-line">
    <div class="col-2">
      <button type="button" class="btn btn-primary">Каталог товаров</button>
    </div>
    <div class="col-10 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
        <li class="breadcrumb-item"><a href="#">Телефоны, планшеты и аксессуары</a></li>
        <li class="breadcrumb-item"><a href="#">Телефоны</a></li>
        <li class="breadcrumb-item"><a href="#">Apple</a></li>
        <li class="breadcrumb-item active">Iphone 12</li>
      </ol>
    </div>
  </div>
  <div class="row ">
    <div class="col-12">
      <section class="item">
        <h2 class="h1 item-title">Iphone 12</h2>
        <div class="item-code">
          <span>Код товара: 568808</span>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-3">
              <div class="item-img">
                <img src="img/prod.jpeg"/>
              </div>
            </div>
            <div class="col-6">
              <div class="item-content">
                <div class="vendor">
                  <span>Производитель: Apple</span><br/>
                  <span>Цвет: Purple</span><br/>
                  <span>ПЗУ: 128 Гб</span>
                </div>
                <div class="item-price">
                  <span class="h4">10000 грн</span>
                </div>
                <div class="item-buy">
                  <button class="btn btn-primary">Купить</button>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="delivery-info">
                <span class="h5">Самовывоз</span>
                <ul>
                  <li>Хрещатик 1</li>
                  <li>Хрещатик 1</li>
                  <li>Хрещатик 1</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="item-info">
        <span class="h2">Описание</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </section>
      <section class="comments">
        <span class="h2">Отзывы</span>
        <div class="comment">
          <span class="comment-author h5">John Doe</span><br/>
          <span class="grade h4">Оценка - 3/5</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </section>
    </div>
  </div>
    <?php
    require_once "template-parts/footer.php";
    ?>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>