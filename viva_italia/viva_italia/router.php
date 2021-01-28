<?
require_once('db.php');// подключаем бд
$mvcPath = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);// $_SERVER суперглобальная переменная. Тип фильтра очищающий FILTER_SANITIZE_URL см на php.net
if (mb_substr($mvcPath, -1, 1) == "/") { //если адрес заканчивается на /, то
  $mvcPath = mb_substr($mvcPath, 0, mb_strlen($mvcPath) - 1);//вырежи его оттуда, выдай длину строки-1
}

//В массив кладем разбитую ссылку по разделителю "/"
$path = explode('/', $mvcPath);
//var_dump($path);

//------Главная страница-------//

if ( !isset($path[1]) or $path[1] == "") { // если не установлен $path[1] или он равен пустоте, т.е.
  // ищется путь http://lifein2020.beget.tech/
  require_once('controllers/HomeController.php'); //подключение к контроллеру('путь к файлу контроллера'). Автоматическое подкл с помощью spl_autoload_register() на codemoo
  $controller = new HomeController();
  $controller->index();
  exit();
  
//------Навигационная панель-----//  
} elseif ($path[1] == "home" && !isset($path[2]) ) { // && !isset и путь дальше $path[2] не определен 
  require_once('controllers/HomeController.php');
  $controller = new HomeController();
  $controller->index();
  exit();
  
} elseif ($path[1] == "places" && !isset($path[2]) ) { // && !isset и путь дальше $path[2] не определен 
  require_once('controllers/PlacesController.php');
  $controller = new PlacesController();
  $controller->places();
  exit();
  
} elseif ($path[1] == "test" && !isset($path[2]) ) { // && !isset и путь дальше $path[2] не определен 
  require_once('controllers/TestController.php');
  $controller = new TestController();
  $controller->test();
  exit();
  
} elseif ($path[1] == "food" && !isset($path[2]) ) { // && !isset и путь дальше $path[2] не определен 
  require_once('controllers/FoodController.php');
  $controller = new FoodController();
  $controller->food();
  exit();
  
} elseif ($path[1] == "facts" && !isset($path[2]) ) { // && !isset и путь дальше $path[2] не определен 
  require_once('controllers/FactsController.php');
  $controller = new FactsController();
  $controller->facts();
  exit();
  
//------Гастрономия-----//
  
} elseif ($path[2] == "confetti-di-sulmona" && !isset($path[3]) ) {
  require_once('controllers/FoodController.php');
  $controller = new FoodController();
  $controller->confettiDiSulmona($path[2]);
  exit();
  
} elseif ($path[2] == "syr-provolone-dop" && !isset($path[3]) ) {
  require_once('controllers/FoodController.php');
  $controller = new FoodController();
  $controller->syrProvoloneDop($path[2]);
  exit();
  
} elseif ($path[2] == "rosa-is-goricii" && !isset($path[3]) ) {
  require_once('controllers/FoodController.php');
  $controller = new FoodController();
  $controller->rosaIsGoricii($path[2]);
  exit();
  
} elseif ($path[2] == "kyanti-classica" && !isset($path[3]) ) {
  require_once('controllers/FoodController.php');
  $controller = new FoodController();
  $controller->kyantiClassica($path[2]);
  exit();
  
} elseif ($path[2] == "pane-karazu" && !isset($path[3]) ) {
  require_once('controllers/FoodController.php');
  $controller = new FoodController();
  $controller->paneKarazu($path[2]);
  exit();
  
} elseif ($path[2] == "tella-di-gaeta" && !isset($path[3]) ) {
  require_once('controllers/FoodController.php');
  $controller = new FoodController();
  $controller->tellaDiGaeta($path[2]);
  exit();
  
//------Где побывать -> Портофино/Собор/Венеция---//  

} elseif ($path[1] == "places" && !isset($path[3]) ) {
  
  /*if ( !isset($path[2]) ) header("Location: /places"); //если после if идет одна команда то {} можно не писать
  else echo "Not found";*/
  
  require_once('controllers/PlacesController.php');
  $controller = new PlacesController();//создаем новый объект класса PlacesController 
  $controller->markPage($path[2]); //вызываем метод этого класса
  exit();
  
} else {
  echo "404 not found";
}

