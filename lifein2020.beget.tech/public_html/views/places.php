<?
$title = "";

$style = " 
  .nav-item {
   font-size: 120% 
  }
  .card{
    border: 0px;
    background: #F3F3F5;
  }
  .card-text {
    text-align: justify; 
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
    <div class=\"card-container col-4 mt-1 p-1\">
      <div class=\"card\">
        <div class=\"card-img-top\"style=\"height: 25rem; background-image: url(/resource/img/$mark->image); background-size: cover; background-position: 50% 50%\"></div>
        <div class=\"card-body\">
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