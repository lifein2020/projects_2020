<!doctype html> <!-- Шаблон начальной странице скопирован с https://bootstrap-4.ru/docs/4.4/getting-started/introduction/ -->
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Поздравительная открытка</title>
    <style>
      body {
        background: Salmon;
      }
      .avatar {
        border-radius: 20%;
        border: 3px solid pink;
      }
      .congratulation {
        background: rgba(255, 255, 255, 0.6); 
      }
      .balloon-container {
        position: ablolute;
        top: 0; 
        left: 0;
        overflow: hidden; 
      }
      .counter-container {
        background: rgba(255, 255, 255, 0.7);
        position: fixed;
        top: 10px;
        left: 10px;
        border: 3px solid darkred;
      }
      .counter {
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <!--
    top: 0 left: 0 задаем начало отчета контейнера от начала оси координат(верхний левый угол)
    overflow: hidden когда элементы контейнера выходят за его границы, они не показываются
    .container>.row.justify-content-center>.col-12+.col-8 краткая запись ниженаписанного-->
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-12 text-center">
          <img class="w-25 bg-white avatar"src="https://i.pinimg.com/originals/4a/42/e8/4a42e88f120217c668b95d8ceed39ec0.png" alt=""> <!-- w-25 ширина 25% класс bootstrap, src ="скопированный url картинки"-->
        </div>
        <div class="col-8 congratulation mt-3 p-3 text-justify">
          <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, architecto nam itaque quis optio maxime natus debitis deleniti officiis maiores eaque minima nulla quibusdam neque sunt nisi dolorem ipsam alias?</span><span>Corporis, qui, nostrum, sunt a ut repudiandae reiciendis quaerat aperiam tenetur mollitia quo autem magnam iusto at eaque odit quasi ipsam vitae quibusdam harum cum necessitatibus nisi aspernatur nam deserunt.</span>
        </p>
        </div>
      </div>
    </div>
    <div class="balloon-container"></div> <!-- создаем контейнер в который как бы поверх предыдущего и в котором будут шарики возникать и не будут уходить за его пределы-->
    <div class="counter-container p-3">
      <p><span>Вы лопнули шариков:</span><span class="counter">0</span></p>
      <p><span>Пропущено шариков:</span><span class="loseCounter">0</span></p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> вместо этого jQuery от Bootstrap-4 вставляем полный jQuery копируя с https://www.w3schools.com/jquery/jquery_get_started.asp Google CDN: , см ниже -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>