<?php
  require_once "../inc/autoloader.inc.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css">
  <meta charset="UTF-8">
  <title>Главная</title>
</head>
<body>
  <?php
    switch($_GET["page"]) {
      case "login":
        $template = new Template("view/template_main.php", ["{BREADCRUMBS}" => "view/breadcrumbs.php",
                                                  "{ASIDE}" => "view/nav_aside.php",
                                                  "{MAIN_CONTENT}" => "view/login.php",
                                                  "{OTHER}" => ""], "view/layout.php");
        break;
      case "basket":
          $template = new Template("view/template_main.php", ["{BREADCRUMBS}" => "view/breadcrumbs.php",
                                                 "{ASIDE}" => "view/nav_aside.php",
                                                 "{MAIN_CONTENT}" => "view/basket.php",
                                                 "{OTHER}" => ""], "view/layout.php");
        break;
      case "catalog":
          $template = new Template("view/template_main.php", ["{BREADCRUMBS}" => "view/breadcrumbs.php",
                                                "{ASIDE}" => "view/product_filter.php",
                                                "{MAIN_CONTENT}" => "view/catalog.php",
                                                "{OTHER}" => ""], "view/layout.php");
        break;
        case "item":
            $template = new Template("view/template_item.php", ["{BREADCRUMBS}" => "view/breadcrumbs.php",
                                                                        "{MAIN_CONTENT}" => "view/item.php"], "view/layout.php");
        break;
      default:
        $template = new Template("view/template_main.php", ["{BREADCRUMBS}" => "",
                                              "{ASIDE}" => "view/nav_aside.php",
                                              "{MAIN_CONTENT}" => "view/slider_main.php",
                                              "{OTHER}" => "view/best_price_offer.php"], "view/layout.php");
      }

  ?>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>