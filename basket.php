<!DOCTYPE html>
<html lang="ru">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <title>Корзина</title>
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
        <li class="breadcrumb-item active">Корзина</li>
      </ol>
    </div>
  </div>
  <div class="row ">
    <div class="col-2">
      <nav>
        <span class="h5"><a href="catalog.php">Каталог товаров</a></span>
        <ul>
          <li><a href="#">Телефоны, планшеты и аксессуары</a></li>
          <li><a href="#">Аккумуляторы, элементы питания</a></li>
          <li><a href="#">Чехлы для телефонов</a></li>
          <li><a href="#">Запчасти для телефонов и электроники</a></li>
          <li><a href="#">Оборудование для ремонта</a></li>
          <li><a href="#">Компьютерная техника</a></li>
          <li><a href="#">Аудио, видеотехника и аксессуары</a></li>
          <li><a href="#">Все категории</a></li>
        </ul>
      </nav>
    </div>
    <div class="col-10">
      <section class="basket">
        <h2 class="h1">Корзина</h2>
          <div class="container">
            <div class="row basket-item">
                <div class="col-2 basket-item-img">
                  <img src="img/prod.jpeg"/>
                </div>
                <div class="col-7">
                  <span class="h4">Товар 1</span>
                </div>
                <div class="col-3">
                  <div class="container">
                    <div class="row">
                      <div class="col-4">
                        <div class="input-group">
                          <input class="form-control" type="number" placeholder="1">
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="h4">10000 грн</div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row basket-item">
              <div class="col-2 basket-item-img">
                <img src="img/prod.jpeg"/>
              </div>
              <div class="col-7">
                <span class="h4">Товар 1</span>
              </div>
              <div class="col-3">
                <div class="container">
                  <div class="row">
                    <div class="col-4">
                      <div class="input-group">
                        <input class="form-control" type="number" placeholder="1">
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="h4">10000 грн</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row basket-item">
              <div class="col-2 basket-item-img">
                <img src="img/prod.jpeg"/>
              </div>
              <div class="col-7">
                <span class="h4">Товар 1</span>
              </div>
              <div class="col-3">
                <div class="container">
                  <div class="row">
                    <div class="col-4">
                      <div class="input-group">
                        <input class="form-control" type="number" placeholder="1">
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="h4">10000 грн</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row order-info">
              <button class="btn btn-primary">Оформить заказ</button>
            </div>
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