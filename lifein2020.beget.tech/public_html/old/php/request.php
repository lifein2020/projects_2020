<<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <button class="request">Отправить запрос</button>
  <script>
    let button = document.querySelector('.request');//recuest - запрос, responce -ответ
    button.onclick = send;
    function send(event) {
      fetch('response.php') //GET-запрос
        .then(responce => responce.text())
        .then(result => console.log(result));
    }
  </script>
</body>
</html>