<?
$title = "";

$style = "
  .nav-link:hover {
    background-color: #D9C1B8;
    color: #401B13;
  }

  .nav-item {
   font-size: 110%;
  }

  .footer {
    bottom: 0;
    width: 100%;
  }

  h1 {
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    font-size: 200%;
    text-align: center;
  }

  p {
    text-align: justify; 
    font-size: 110%;
    padding-top: 1rem;
  }

  .picture {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .container {
    width: 80%;
    padding: 10px;  
    margin-bottom: 3rem;
    margin-top: 3rem;
    background: #F3F3F5; 
    box-shadow: 0.4em 0.4em 5px 5px rgba(122,122,122,0.5);
  }

  .row {
    padding-left: 30px;
    padding-right: 0;
  }

  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 70%;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
  }
  
  .center:hover {
    box-shadow: 0 0 2px 1px #401B13;
  }
";

$content = "
<div class=\"container\">
  <div class=\"row  mt-5\">
    <div class=\"col-11\">
      <h1>$mark->name</h1>
    </div>
  </div>
  <div class= \"row\">
    <div class=\"col-11 text d-flex flex-column justify-content-around\">
      <p>$mark->description</p>
      <div class=\"picture\">
        <a target=\"_self\" href=\"/resource/img/$mark->image\">
          <img src=\"/resource/img/$mark->image\" class=\"center\">
        </a>
      </div>
      <div class=\"picture\">
        <a target=\"_self\" href=\"/resource/img/$mark->image1\">
          <img src=\"/resource/img/$mark->image1\" class=\"center\">
        </a>
      </div>
    </div>
  </div>
</div>
";

$scripts = "";