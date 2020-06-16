<?
$title = "";

$style = "
  h {
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    font-size: 200%;
    text-align: center;
  }
  p {
    text-align: justify; 
    font-size: 110%;
  }
  .picture {
    margin-top: 3rem;
  }
  .container {
    background: #F3F3F5;
  }
";

$content = "
<div class=\"container\">
  <div class=\"row  mt-5\">
    <div class=\"col-11\">
      <h>$mark->name</h>
    </div>
  </div>
  <div class= \"row\">
    <div class=\"col-11 text d-flex flex-column justify-content-around\">
      <p>$mark->description</p>
      <div class=\"picture\">
        <img src=\"/resource/img/$mark->image\">
      <div>
      <div class=\"picture\">
        <img src=\"/resource/img/$mark->image1\">
      </div>
    </div>
  </div>
";

$scripts = "";