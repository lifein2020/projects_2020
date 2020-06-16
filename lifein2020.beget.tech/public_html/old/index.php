<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8"> 
    <title>Мое портфолио</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> <!-- библиотека CSS от Bootstrap-4.ru -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Open+Sans&display=swap'); /* шрифт задаем, который берем с сайта fonts.google.com/ */
    /*
    font-family: 'Montserrat', sans-serif;
    font-family: 'Open Sans', sans-serif;
    */ 
      h1, h2 {
        font-family: 'Open Sans', sans-serif;
      }
      p, a, td, th, span, label, input, textarea { /* перечислены множественные селекторы */
        font-family: 'Montserrat', sans-serif;
      } 
      h1 {
        text-transform: uppercase; /* в фигурных скобках  язык css; uppercase/lowercase верхний регистр/нижний регистр*/
      }
      h2 { /* задаем свойства заголовку через ; */
        front-family: arial; /* шрифт*/
        front-size: 40px; /* пиксели*/
        color: rgb( 193,66,66); /* 1.darkred 2.rgb (0-255, 0-255, 0-255) 3. hsl(0-255, 0-255) # fff/ #C14242 */
      }
      body {
        background: rgba(193, 66, 66, .1); /* .1 прозрачность */
      }
      #image { /* обращаемся к id картинки*/
        border: 3px solid darkred; /* задаем красную границу картинке 3px цвет */  
      }
      .link {
        list-style: square;
      }
      .link a { /* ищет все элементы с тегом а внутри тэга li и возвращает их значения */
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
      }
      .second {
        color: red;
      }
      .image-box{
        text-align: center; /* выравниваем картинку по центру*/
      }
      p {
        text-align: justify; /* выравниваем текст по ширине*/
      }
    </style>
  <\head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <h1 style="text-align: center;">Мое портфолио</h1> <!--style="text-align: center;" это атрибут h1-->
    <hr> <!-- черта под "Мое портфолио" -->
    <div> <!-- блоки элеметов-->
      <h2>Обо мне</h2>
      <div class="image-box"> <!-- пишем div.image-box нажимаем tab-->
        <img id="image" src="https://wiki-vk.ru/s/245/128/8.png"alt="минни маус"> <!-- src это source ресурс-->
      </div>
      <p class="bg-dark text-white mt-3 p-3"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, deserunt, perspiciatis non eveniet adipisci recusandae illo totam dolorem animi fuga officia dolor. Quas, neque, nobis distinctio illum accusamus deserunt magnam!</span><span>Qui, explicabo, alias, quidem minima totam dicta unde soluta quisquam exercitationem magni distinctio tempore veritatis aliquam animi maiores doloribus blanditiis perspiciatis ut. Aperiam, assumenda, quaerat laborum earum nisi cupiditate esse.</span></p> <!--<p> это текст под картинкой. Lorem -> жмем Tab, выходит автоматически текст - рыба,<span> для отделения кусков текста внутри(выходит автоматически)--> <!-- p-3 паддинг в 3 рема-->
      </div>
      <hr>
      <div>
        <h2>Я в соцсетях</h2>
        <ul class="d-flex justify-content-around"> <!-- ul ненумерованный список, ol нумерованный список-->
          <li class="link"><a class="btn btn-info my-1" href="https://vk.com" target="_blank">В контакте</a></li> <!-- target атрибут <a> чтобы ссылка открывалась в соседнем окне-->
          <li class="link second"><a class="btn btn-info my-1"  href="https:instagram.com" target="_blank">Инстаграмм</a></li> <!-- second делает квадраты красными а цвет задается с помощью css--> <!-- в my-1 m это margin. m-1 my-1 mx-1 mt-2 mr-3 mb-4 ml-5 -->
          <li class="link"><a  class="btn btn-info my-1" href="https:twitter.com" target="_blank">Твиттер</a></li>
          <li class="link second"><a class="btn btn-info my-1" href="https:fb.com" target="_blank">Фейсбук</a></li> <!-- ctrl+shift+d-->
        </ul>
      </div> 
      <hr>
      <div>
        <h2> Мое портфолио </h2>
        <table border="1">
          <tr>
            <th colspan="2">Тип сайта</th> <!--table header,атрибуты colspan=""  rowspan="" объединение ячеек-->
            <th rowspan="3">Количеcтво</th>
          </tr>
          <tr> <!--table row-->
            <td>Статичный</td> <!--table data-->
            <td>42</td>
          </tr>
          <tr>
            <td>Адаптивный</td>
            <td>84</td>
          </tr>
        </table>
      </div>
      <hr>
      <div>
        <h2>Отправить заявку</h2>
        <form action="#"> <!-- создает форму и отсылает нас на страницу,где обрабатывается наш запрос, введенный в рамку input(здесь вместо ссылки на страницу #)-->
          <div>
          <input type="text" placeholder="Введите имя">
          </div>
          <div>
            <input type="email" placeholder="Введите e-mail">
          </div>
          <div>
            <label> <!--подцепляет текст к input-->
              <input type="radio" name="sitetype" checked> <span>Адаптивный</span> <!-- Адаптивный -это тип сайта, type="radio" это радиокнопка,то что в кавычках придумываем сами, атрибут name группирует input'ы, checked чтобы включать только одну кнопку-->
            </label>
            <label>
              <input type="radio" name="sitetype" checked> <span>Статичный</span> <!-- radio включается либо то, либо то-->
            </label>
          </div>
          <div>
            <input type="checkbox" id="design"> <!-- checkbox включается и то, и то, и то-->
            <label for="design">Дизайн</label>
            <input type="checkbox" id="programming" checked> <!-- checked заранее отмечено-->
            <label for="programming">Разработка</label>
            <input type="checkbox" id="support">
            <label for="support">Поддержка</label>
          </div>
          <div>
            <textarea cols="30" rows="10" placeholder="Ваш коментарий"></textarea> <!-- вставить текст с количеством символов в 30 столбцов, 10 строк-->
          </div>
          <div>
            <input class="btn btn-primary" type="submit" value="Отправить заявку">
            <input class="btn btn-light" type="reset" value="Сброс">
            <!-- <button></button> кнопка внутри страницы, например оживает картинка-->
            <!--<a href=""></a> кнопка, ссылающаяся на что-то--> <!-- class="btn btn-light" это готовый класс из библиотеки Bootstrap-4.ru -->
          </div>
        </form> <!--DOM - дерево (document object model) -->
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> <!-- библиотека JS от Bootstrap-4.ru -->
    </body>
    
  
    </html>