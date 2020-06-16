<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    div[class^="container"] {
      background: darkblue;
      min-height: 1000px;
      }
      .row {
        border: 2px solid white;
        min-height: 300px;
      }
      div[class*="col-"] {
        text-align: center;
        color: white;
        /*max-height: 150px;*/
        border: 3px solid red;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid"> <!-- синий экран на всю стр.-->
      <div class="row"> <!-- строка, row занимает всюширину, состоит из 12 колонок по умолчанию, изначально он display: flex контейнер -->
        <div class="col-4 col-md-6 order-2 order-md-3">1</div> <!-- col объявляет колонки с заданной шириной, т.е. 1-й элемент занимает 4 колонки. Изначально он display: block--> <!-- order порядок колонок-->
        <div class="col-6 col-md-1 order-1 order-md-2">2</div> <!-- если местами меняем 1 и 2 элемент, то остальным элементам присваеваем order'ы выше 2-->
        <div class="col-2 col-md-3 order-5 order-md-1">3</div> <!-- col-1 до col-12 -->
        <div class="col-2 col-md-2 order-5">4</div>
        <div class="d-none col-md-6 d-md-block order-5">5</div> <!-- d-none до среднего значения md(размера экрана) не видно 5-й элемент, d-md-block возвращаем 5-й элемент на экран размером больше md -->
        <div class="col-6 offset-4 col-md-3 offset-md-0 order-5">6</div> <!-- offset - отступ между колонками--> <!-- на маленьких экранах делай данный элемент в 6 колонок с отступом в 4 колонки, а на экранах размером md и больше делай в 3 колонки без отступа-->
        <div class="col-6 col-md-3 order-5">7</div>
      </div>
      <div class="row justify-content-end justify-content-md-start align-items-center"> <!-- Горизонтальное выравнивание justify-content-between justify-content-around justify-content-start justify-content-enter -->
      <!-- Вертикальное выравнивание: align-items-start align-items-center align-items-end -->
        <div class="col-2 align-self-start">10</div>
        <div class="col-2">11</div>
        <div class="col-2">12</div>
        <div class="col-2 align-self-end">13</div>
      </div>
      <div class="row flex-column justify-content-around"> <!--flex-column свойство горизонтального выравнивания для вертикального выравнивания -->
        <div class="col-12">20</div>
        <div class="col-12">21</div>
        <div class="col-12">22</div>
        <div class="col-12">23</div>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="row flex-column justify-content-around align-items-center">
            <div class="col-8">Домой</div>
            <div class="col-8">О нас</div>
            <div class="col-8">Проекты</div>
            <div class="col-8">Контакты</div>
          </div>
        </div>
        <div class="col-8">
          <div class="row"> <!--.row>.col-2+.col-10+.col-2+.col-6+.col-4+.col-12 tab -->
            <div class="col-2">30</div>
            <div class="col-10">31</div>
            <div class="col-2">32</div>
            <div class="col-6">33</div>
            <div class="col-4">34</div>
            <div class="col-12">35</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>