<!DOCTYPE html>
<html lang="ru">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <title>Главная</title>
</head>
<body>
  <div class="container">
    <?php
      require_once "template-parts/header.php";
    ?>
    <div class="row">
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
        <section class="slider">
          <span>slider placeholder</span>
        </section>
      </div>
    </div>
    <div class="row">
      <section class="col-12 best-offer">
        <h2>Лучшая цена</h2>
        <div class="container">
          <div class="row">
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="img/prod.jpeg" class="card-img-top" alt="Товар"/>
                <div class="card-body">
                  <h5 class="card-title">Товар 1</h5>
                  <span class="h4 best-offer-price">10000 грн</span>
                  <a href="#" class="btn btn-primary">Купить</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="img/prod.jpeg" class="card-img-top" alt="Товар"/>
                <div class="card-body">
                  <h5 class="card-title">Товар 1</h5>
                  <span class="h4 best-offer-price">10000 грн</span>
                  <a href="#" class="btn btn-primary">Купить</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="img/prod.jpeg" class="card-img-top" alt="Товар"/>
                <div class="card-body">
                  <h5 class="card-title">Товар 1</h5>
                  <span class="h4 best-offer-price">10000 грн</span>
                  <a href="#" class="btn btn-primary">Купить</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="img/prod.jpeg" class="card-img-top" alt="Товар"/>
                <div class="card-body">
                  <h5 class="card-title">Товар 1</h5>
                  <span class="h4 best-offer-price">10000 грн</span>
                  <a href="#" class="btn btn-primary">Купить</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php
      require_once "template-parts/footer.php";
    ?>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>