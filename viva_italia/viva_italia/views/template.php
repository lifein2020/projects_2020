<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/8a27daff4a.js" crossorigin="anonymous"></script>

    <!-- <title><?= $title ?></title>-->
    <style><?= $style ?></style>
  </head>
  <body class="wellcome">
    <header>
          <!--Навигационаня панель-->
      <nav class="navbar navbar-light bg-light">
      <!--<div class="container">
        <nav class="navbar navbar-light bg-light">-->
        <a class="navbar-brand  ml-5" href="/" style="font-size: 200%; font-family: 'Sansita Swashed', cursive;">
          <img src="/resource/img/flag.jpeg" width="50" height="50" class="d-inline-block aign-top" alt="" loading="lazy">
          Viva Италия
        </a> 
        <!--<form class="form-inline mr-5">
          <input class="form-control mr-sm-2" type="search" placeholder="Поиск по сайту" aria-label="search">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Поиск</button>
        </form> <!-- поисковик можно прикрутить от yandex-->
      </nav>
      <nav class="navbar navbar-expand-md  navbar-dark" style="background: #D9D6D2; font-size: 110%">
        <a href="/home">
          <span style="color: #67645D; font-size: 14px;">
          <i class="fas fa-home fa-3x"></i>
        </span>
        </a>
        <button class="navbar-toggler" type="button" style="background-color: #67645D; border: 1px solid #67645D" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" style="color: #67645D; padding-right:2rem" href="/places">Где побывать</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #67645D; padding-right:2rem" href="/food">Гастрономия</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #67645D; padding-right:2rem" href="/facts">Интересные факты</a>
            </li>   
            <li class="nav-item">
              <a class="nav-link" style="color: #67645D" href="/test">Пройти тест</a>
            </li>
          </ul>
        </div>  
      </nav>
      <!--<ul class="nav nav-justified" style="background: #D9D6D2; font-size: 110%">
        <li class="nav-item">
          <a class="nav-link" href="/places" style="color: black">Где побывать</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/food" style="color: black">Гастрономия</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/facts" style="color:black">Интересные факты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/test" style="color: black">Пройти тест</a>
        </li>
      </ul>--> 
    </header>
   
    <?= $content ?>

    <!-- Optional JavaScript -->
    <?= $scripts ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> вместо этого jQuery от Bootstrap-4 вставляем полный jQuery копируя с https://www.w3schools.com/jquery/jquery_get_started.asp Google CDN: ,чтобы не конфликтовали, см строку ниже -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <footer class="footer">
        <nav class="navbar navbar-light bg-light" style="text-align: center">
          <span class="navbar-text" style="color: #D9D5F2; height:auto; position: absolute; left: 0; width: 100%; background-color: black">
            2020 http://lifein2020.beget.tech - сайт об Италии
          </span>
        </nav>
    </footer>
  </body>
</html>