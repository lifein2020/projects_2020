<?
$title = "Тест";

$style = "
  .nav-link:hover {
    background-color: #D9C1B8;
    color: #401B13;
  }

  .nav-item {
   font-size: 110% 
  }

  h1 {
    font-size: 150%;
    text-align: center;
    pading: 30px 20px;
    font-weight: bold;
    font-family: 'Crimson Text', serif;
  }

  h2 {
    font-size: 150%;
    font-family: 'Crimson Text', serif;
    color: #401B13;
    text-align: left;
    pading: 30px 20px;
    margin-bottom: 25px;
    margin-left: 2rem;
  }

  h6 {
    text-align: right;
  }

  .test-question{
    padding-top: 30px;
  }

  .test-list {
    padding-top: 20px;
    padding-left: 30px;
    margin-bottom: 20px;
  }

  .answer {
  width: 225px;
  border-radius: 5px;
  border-width: 8px;
  border-color: darkgrey;
  }
  
  .onetime {
  border-radius: 5px; 
  border-width: 8px;
  border-color: #734939;
  }
 
  .container {
    width: 80%;
    padding: 10px; 
    margin-left: 10%;
    margin-bottom: 3rem;
    margin-top: 3rem;
    background: #D9C1B8;
    box-shadow: 0.4em 0.4em 5px 5px rgba(122,122,122,0.5);
  }

  .col-11 {
    padding-top: 2rem;
  }
  
  .col-3 {
    background: url(https://cdn.pixabay.com/photo/2016/08/16/13/30/pisa-1597991__480.png) 100% 100% no-repeat;
    background-size: contain;
  }
";

$content = "
<div class=\"container\">
  <h6>Пройти тест</h6>
  <div class=\"row justify-content-center mt-5\">
    <div class=\"col-8\">
      <h1>Италия -  интереснейшая страна, которая имеет много необычных, а порой забавных фактов. Проверьте свои знания и узнайте, насколько хорошо вы знакомы с ними!</h1>
    </div>
    <div class=\"col-3\">
      <!-- <img src=\"https://cdn.pixabay.com/photo/2016/08/16/13/30/pisa-1597991__480.png \" width=\"130px\" height=\"130px\" alt=\"\"> -->
    </div>
  </div>
  <div class= \"row\">
    <div class=\"col-11 test-question d-flex flex-column justify-content-around\">
      <h2>1. Что такое Чинечитта?</h2>
      <div class=\"col-6 test-list d-flex flex-column justify-content-around\">
        <label> 
          <input class=\"answer\" type=\"button\" name=\"onetype\" value=\"Десерт\" style=\"color: white; background: grey\" question=\"wrong\">
        </label>
        <label>
          <input class=\"answer\" type=\"button\" name=\"onetype\" value=\"Римская «Фабрика грёз»\"style=\"color: white; background: grey\" question=\"right\" > 
        </label>
        <label>
          <input class=\"answer\" type=\"button\" name=\"onetype\" value=\"Музыкальный инструмент\" style=\"color: white; background: grey\" question=\"wrong\">
          <!--<input type=\"button\" name=\"onetype\" class=\"point\"> <span>Венеция</span>-->
        </label>
    </div>
  </div>
</div>  
  
  <div class= \"row\">
    <div class=\"col-11 test-question d-flex flex-column justify-content-around\">
      <h2>2. Как называется \"музыкальный хлеб\"?</h2>
      <div class=\"col-6 test-list d-flex flex-column justify-content-around\">
        <label>
            <input class=\"answer\" type=\"button\" name=\"twotype\"value=\"Панеттоне\" style=\"color: white; background: grey\" question=\"wrong\">
          </label>
          <label>
            <input class=\"answer\" type=\"button\" name=\"twotype\" value=\"Тьелла-ди-Гаэта\" style=\"color: white; background: grey\" question=\"wrong\">
          </label>
          <label>
            <input class=\"answer\" type=\"button\" name=\"twotype\" value=\"Пане каразу\" style=\"color: white; background: grey\" question=\"right\">
          </label>
          
      <div class=\"col-4 test-list d-flex flex-column justify-content-around\">
        <label> 
            <input class=\"onetime\" type=\"button\" value=\"  Пройти тест заново  \" style=\"color: #D9C1B8; background: #401B13; font-weight=bold; height: 150%\">
          </label>
      </div>
      </div>
    </div> 
  </div>
</div>

  ";

$scripts = "<script src=\"/resource/js/test.js\"></script>";