<?
$title = "";

$style = " 
  .nav-link:hover {
    background-color: #D9C1B8;
    color: #401B13;
  }

  .nav-item {
   font-size: 110% 
  }

  .footer {
    bottom: 0;
    width: 100%;
    margin-top: 1rem;
  }

  .card {
    border: 0px;
    background: #F3F3F5;
    height: auto;
  }

  .card-text {
    text-align: justify; 
    width: auto;
  }

  .btn {
    display: inline;
  }

  .middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.card-img-top:hover {
  opacity: 0.3;
}
";
$content = "
    <div class=\"container-fluid\">
      <div class=\"row\">

";
foreach($marks as $mark) {
  $description=$mark->description;
  if (mb_strlen($description) > 120) {
    $description = mb_substr($description, 0, 120) . "..."; //если описание больше 100 знаков,то обрезает и ставит троеточие
  }

  $content .= "
    <div class=\"card-container col-12 mt-1 p-1 col-md-4 order-1 order-md-2\"> <!-- на маленьких экранах показывай 1карточку шириной в 12колов,а на больших-3карточки шириной в 4кола-->  
      <div class=\"card\">
        <a href=\"/places/$mark->topic\" target=\"_self\">
          <div class=\"card-img-top\"style=\"height: 25rem; background-image: url(/resource/img/$mark->image); background-size: cover; background-position: 50% 50%\">
          </div>
        </a>
        <div class=\"card-body\">
          <h6>Где побывать</h6>
          <h5 class=\"card-title\" style=\"\">$mark->name</h5>
          <p class=\"card-text\">$description</p>
          <a href=\"/places/$mark->topic\" class=\"btn\" style=\"background: #E56C69\">Продолжение</a>
        </div>
      </div>
    </div>
";
}

$content .= "
    </div>
  </div>
";

$scripts = "";