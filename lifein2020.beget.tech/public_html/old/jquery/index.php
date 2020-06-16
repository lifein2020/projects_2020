<<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Jquery</title>
  <style>
    .box {
      width: 300px;
      height: 300px;
      background: RoyalBlue;
    }
  </style>
</head>
<body>
  <div class="box"></div>
  <!-- Подключаем библиотеку jquery(для упрощения работы с элементами и анимацией), вставляя готовый код из https://www.w3schools.com/jquery/jquery_get_started.asp. Готовые скрипты пихаем перед закрывающим тегом body -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    console.log($('.box'));// $('.box') - взвращает не HTMLelement (как querySelector), а объект Jquery, из-за этого у элементов найденных таким способом мы можем использовать только методы Jquery
    /*let color = $('.box').css('background');
    console.log(color);*/
    $('.box').click(function() { // см https://htmlcheatsheet.com/jquery/
      
      $('.box').css({ // метод
            "background" : "tomato", // меняем свойства
            "border" : "2px solid royalblue",
            "box - shadow" : "0 0 30px 15 px rgba(0,0,0,0.4 )",
          })
          .attr({
              "title" : "коробка",
              "number" : "1",
          })
          .addClass('cool'); //пока не поставим ; будет обращаться к .box
    });
    
    //Анимация
    $('.box').hide()
            .show(1000)
            .fadeOut(1000)
            .fadeIn(500) // появление
            .slideUp(1000)
            .slideDown(1000)
            .delay(1000) // 1000 ==1 сек
            .css("position", "absolute")
            .animate({
                  "top" : "300px",
                  "left" : "300px",
            }, 1000)
            .delay(1000)
            .animate({
                  "width" : "500px",
                  "height" : "500px",
            }, 1000, changeBoxText);
            
    function changeBoxText() {
      $('.box').html("<h2>Анимация завершилась</h2>");
      $('.box h2').css({
        "color" : "white",
        "text-align" : "center",
        "margin-top" : "200px",
      })
    }
    
    
  </script>
</body>
</html>

