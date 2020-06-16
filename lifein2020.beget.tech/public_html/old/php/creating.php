<?php
  $title = "Сборка страниц на php";
  $style = "
    h1 {
      text-align: center;
    }
  ";
  $logined = false;
  
  $product1 = array( // ассоциативный массив создается с функцией array. Это массив в котором вместо номеров слова
    "name" => "Товар1", // "name" - ключ, "Товар1" - значение
    "price" => "100",
    "desc" => "Клевый товар",
    );
  $product2 = array(
    "name" => "Товар2",
    "price" => "120",
    "desc" => "Новый клевый товар",
    );
  $product3 = array(
    "name" => "Товар3",
    "price" => "150",
    "desc" => "Старый, но клевый товар",
    );  
    $products = [$product1, $product2, $product3];
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo $title ?></title>
    <style>
      <?php echo $style ?>
    </style>
  </head>
  <body>
    <h1><?= $title ?></h1> <!-- php echo то же самое что и ?= -->
    <?php if ($logined == true):?> <!-- : здесь как { . Вывод разных элементов при разных условиях. В зависимости от значения переменной меняется html код -->
      <a href="#" class="btn btn-primary">Выйти</a>
      <?php else: ?>
        <a href="#" class="btn btn-success">Войти</a>
        <a href="#" class="btn btn-primary">Регистрация</a>
        <?php endif; ?> <!-- endif это закрывающая } -->
        <div class="container">
          <div class="row justify-content-center">
            <?php foreach($products as $product): ?> <!-- создаем карточки товаров, перебирая массив с помощью цикла и выводим названия цены описания-->
              <div class="col-4 shadow">
                <p>Название: <?php echo $product['name']?></p> 
                <p>Цена: <?php echo $product['price']?></p>
                <p>Описание: <?php echo $product['desc']?></p>
              </div>
              <?php endforeach; ?>
          </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>