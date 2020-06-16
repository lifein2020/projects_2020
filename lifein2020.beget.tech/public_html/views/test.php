<?
$title = "";

$style = "
  .nav-item {
   font-size: 120% 
  }
  h1 {
    font-size: 150%;
    text-align: center;
    pading: 30px 20px;
    font-weight: bold;
    font-family: 'Crimson Text', serif;
  }
  h {
    font-size: 150%;
    text-align: center;
    pading: 30px 20px;
    margin-bottom: 25px;
    font-family: 'Crimson Text', serif;
    color: #401B13;
  }
  
  .test-question{
    padding-top: 30px;
  }
  .test-list {
    padding-top: 20px;
    margin-bottom: 20px;
    
  }
  .answer {
  width: 115%;
  border-radius: 5px;
  border-width: 8px;
  border-color: darkgrey;

  }
  .onetime {
  border-radius: 5px; 
  border-width: 8px;
  border-color: #734939;
  }
  h {
    margin-left: 2rem;
    text-align: left;
  }
  .container {
    background: #D9C1B8;
  }
  .col-11 {
    padding-top: 2rem;
  }

";

$content = "
<div class=\"container\">
  <div class=\"row justify-content-center mt-5\">
    <div class=\"col-11\">
      <h1>Италия интереснейшая страна, которая имеет много необычных, а порой забавных фактов.
        Проверьте свои знания и узнайте, насколько хорошо вы знакомы с ними.</h>
    </div>
  </div>
  <div class= \"row\">
    <div class=\"col-6 test-question d-flex flex-column justify-content-around\">
      <h>1. Что такое Чинечитта?</h>
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
    <div class=\"col-6 test-question d-flex flex-column justify-content-around\">
      <h>2. Как называется \"музыкальный хлеб\"?</h>
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
          
      <div class=\"col-6 test-list d-flex flex-column justify-content-around\">
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