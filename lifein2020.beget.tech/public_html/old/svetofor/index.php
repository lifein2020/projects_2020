<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Светофор</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Светофор</h1>
  <div class="svetofor">
    <div class="box red" onclick="alert('Вы нажали на красный!')"></div> <!-- onclick слушатель событи click, на него повесили код JS -->
    <div class="box yellow"></div>
    <div class="box green"></div>
  </div>
  <script>
    let yellow = document.querySelector(".yellow");
    yellow.onclick = function () { // безымянная функция чтобы функция alert не выполнялась моментально
      alert("Вы нажали на желтый!");
    }
    let green = document.querySelector(".green");
    green.addEventListener("click", function () {
      console.log("Вы нажали на зеленый!");
    });
    green.addEventListener("click", function () {
      alert("Вы нажали на зеленый!");
    });
  </script>
</body>
</html>