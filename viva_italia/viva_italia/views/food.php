<?
$title = "Гастрономия";

$style = "
  .nav-link:hover {
    background-color: #D9C1B8;
    color: #401B13;
  }

  .nav-item {
   font-size: 110%; 
  }

  .btn {
    font-size: 105%;
    display: inline;
  }

  p {
    text-align: left; 
    min-height: 4rem;
  }

  .card {
    margin-top: 3rem;
    margin-bottom: 3rem;
    margin-right: 4rem;
    background: #F3F3F5;
  }
  
  .card-text {
    font-size: 130%;
  }
";

$content = "
  <h></h>
  
  <div class=\"row ml-4 mr-4 mb-4\">
    <div class=\"col-sm-4\"> <!-- на строке помещается 3 карточки, col-3 соответственно 4 карточки-->
      <div class=\"card\" style=\"box-shadow: 0.4em 0.4em 5px 5px rgba(122,122,122,0.5)\">
        <img src=\"/resource/img/confetti.jpg\" class=\"card-img-top\" alt=\"...\" width=\"\"; height=\"100%\"> <!-- ширина задается автоматически, исходя из количества карточек в строке-->
        <div class=\"card-body\">
          <h5 class=\"card-title\" style=\"font-size: 100%\">Гастрономия</h5>
          <p class=\"card-text\">Конфетти ди Сульмона</p>
          <a href=\"/food/confetti-di-sulmona\" class=\"btn\" style=\"box-shadow: inset 0 0 7px 2px; background: #E56C69\">Подробнее</a>
        </div>
      </div>
    </div>
    <div class=\"col-sm-4\">
      <div class=\"card\" style=\"box-shadow: 0.4em 0.4em 5px 5px rgba(122,122,122,0.5);
      \">
        <img src=\"/resource/img/wine.jpg\" class=\"card-img-top\" alt=\"...\" width=\"\"; height=\"100%\">
        <div class=\"card-body\">
          <h5 class=\"card-title\" style=\"font-size: 100%\">Гастрономия</h5>
          <p class=\"card-text\">Всё, что вы хотели знать о Кьянти Классико</p>
          <a href=\"/food/kyanti-classica\" class=\"btn\" style=\"box-shadow: inset 0 0 7px 2px; background: #E56C69\">Подробнее</a>
        </div>
      </div>
    </div>
    <div class=\"col-sm-4\">
      <div class=\"card\" style=\"box-shadow: 0.4em 0.4em 5px 5px rgba(122,122,122,0.5);
      \">
        <img src=\"/resource/img/tiella.jpg\" class=\"card-img-top\" alt=\"...\" width=\"\"; height=\"100%\">
        <div class=\"card-body\">
          <h5 class=\"card-title\" style=\"font-size: 100%\">Гастрономия</h5>
          <p class=\"card-text\">Тьелла-ди-Гаэта</p>
          <a href=\"/food/tella-di-gaeta\" class=\"btn\" style=\"box-shadow: inset 0 0 7px 2px; background: #E56C69\">Подробнее</a>
        </div>
      </div>
    </div>
    <div class=\"col-sm-4\">
      <div class=\"card\" style=\"box-shadow: 0.4em 0.4em 5px 5px rgba(122,122,122,0.5)\">
        <img src=\"/resource/img/provolone.jpeg\" class=\"card-img-top\" alt=\"...\" width=\"\"; height=\"100%\">
          <div class=\"card-body\">
            <h5 class=\"card-title\" style=\"font-size: 100%\">Гастрономия</h5>
            <p class=\"card-text\">Сыр Проволоне DOP</p>
            <a href=\"/food/syr-provolone-dop\" class=\"btn\" style=\"box-shadow: inset 0 0 7px 2px; background: #E56C69\">Подробнее</a>
          </div>  
      </div>
    </div>
    <div class=\"col-sm-4\">
      <div class=\"card\" style=\"box-shadow: 0.4em 0.4em 5px 5px rgba(122,122,122,0.5);
      \">
        <img src=\"/resource/img/Rosa_di_Gorizia_II.jpg\" class=\"card-img-top\" alt=\"...\" width=\"\"; height=\"100%\";>
        <div class=\"card-body\">
          <h5 class=\"card-title\" style=\"font-size: 100%\">Гастрономия</h5>
          <p class=\"card-text\">«Роза из Гориции»: радиккьо или итальянский цикорий</p>
          <a href=\"/food/rosa-is-goricii\" class=\"btn\" style=\"box-shadow: inset 0 0 7px 2px; background: #E56C69\">Подробнее</a>
        </div>
      </div>
    </div>
    
    <div class=\"col-sm-4\">
      <div class=\"card\" style=\"box-shadow: 0.4em 0.4em 5px 5px rgba(122,122,122,0.5);
      \"\">
        <img src=\"/resource/img/pane.jpeg\" class=\"card-img-top\" alt=\"...\" width=\"\"; height=\"100%\">
        <div class=\"card-body\">
          <h5 class=\"card-title\" style=\"font-size: 100%\">Гастрономия</h5>
          <p class=\"card-text\">Пане каразау – «музыкальный» хлеб</p>
          <a href=\"/food/pane-karazu\" class=\"btn\" style=\"box-shadow: inset 0 0 7px 2px; background: #E56C69\">Подробнее</a>
        </div>
      </div>
    </div>
    
  </div>
  ";

$scripts = "";