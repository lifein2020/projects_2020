<?
//Шаблон того,как должна выглядеть Домашняя страница(home.php)
//$title = "Viva Италия";// эти переменные вызываются в template.php - 

$style = "
  .nav-link:hover {
    background-color: #D9C1B8;
    color: #401B13;
  }

  .nav-item {
    font-size: 110% 
  }

  h {
    font-family: 'Crimson Text', serif;
    color: #F2F2F2;
    font-size: 40px;
    text-align: center; 
    font-weight: bold;
  }
  
  h:hover {
    font-size: 50px; /*увеличивает шрифт до 20 пикселей*/
    transition: font-size 1000ms; 
  }
  
  p {
    text-align: justify; 
    padding: 30px 200px;
    color: #F2F2F2;
    font-size: 20px;
    font-weight: bold;
    font-family: 'Crimson Text', serif;
  }

  p1 {
    text-align: justify; 
    font-size: 25px;
    color: #E91D3A;
    font-weight: bold;
    font-family: 'Crimson Text', serif;
  }

  .wellcome {
    background: url(\"/resource/img/viva_shary.jpg\") no-repeat;
    size: cover;
    position: 50% 50%; 
    background-position: center;
    background-size: cover;
    position: relative;
  }
  
  .footer {
    position: bottom;
    bottom: 0;
    width: 100%;
  }

  .balloon-container {
    position: ablolute;
    top: 0; 
    left: 0;
    overflow: hidden; 
  }

  .counter-container {
    position: fixed;
    top: 600px;
    left: 40px;
    <!--border: 3px solid darkred;-->
    <!--background: rgba(255, 255, 255, 0.7);-->
  }
  
  .counter {
    font-weight: bold;
    text-align: start;
  }
";

$content = "
<div class=\"container\">
  <div class=\"row justify-content-center mt-5\" style=\"font-family: 'Tenali Ramakrishna', sans-serif;\">
    <h>Откройте для себя неповторимую Италию!</h>
    <!--<p>Каждый находит для себя что-то удивительное и неповторимое в этой стране, будь то древние развалины или чудесные пляжи, бурная ночная жизнь или неповторимые горнолыжные курорты, красивейшие острова или надолго запоминающийся шопинг. Добавьте к этому вкусную еду и доброжелательных местных жителей, и можете быть уверены, что путешествие в Италию подарит незабываемые эмоции.</p>-->
  </div>
</div>  
      
<div class=\"balloon-container\"></div> <!-- создаем контейнер в который как бы поверх предыдущего и в котором будут шарики возникать и не будут уходить за его пределы-->
<!--<div class=\"counter-container \">
  <p1><span>Вы лопнули шариков: </span><span class=\"counter\">0</span></p1><br>
  <p1><span>Вы пропустили шариков: </span><span class=\"loseCounter\">0</span></p1>
</div>-->
  
  ";

$scripts = "<script src=\"/resource/js/baloon.js\"></script>";















