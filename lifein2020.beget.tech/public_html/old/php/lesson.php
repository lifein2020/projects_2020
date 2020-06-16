<meta charset="UTF-8">
<?php
  $text = "Текст из переменной";
  echo $text; 
?>

<hr> 
<?php
  echo '
    <p style="text-align: center; font-size: 35px;" onclick="alert(`Вы нажали на текст`)">'.$text.'</p>';
    echo "
    <p style='text-align: center;'>$text</p>
    ";
?>
<hr>

<h2>Математические вычисления:</h2>

<?php
  $a = 10;
  $b = 2;
  $result = $a + $b; // $a - $b; $a / $b; $a * $b; $a % $b; $a ** $b;
?>

<p>Результат: <?php echo $result ?></p>

<h2>Использование переменной содержащей имена других переменных</h2>
<?php
  $apples =5;
  $oranges = 10;
  $fruits = "oranges"; 
  echo ${$fruits}; // вызов переменной контроллера
?>
<h2>Константы</h2>
<?php
  define("PI", 3.14); // функция вызовы const
  echo 'Число П='.PI; //const пишутся заглавными буквами, чтобы их было заметно
?>
<h2>Типы данных в php</h2>
<?php
  $integer = 3; //Целое число
  $float = 3.24; // Вещественное число
  $string = "Стока";
  $array = [1, 2, 3, 4];
  $nul = null; //Ничего
  //$object = new SomeObject(); 
  //$resource = файл;
  
?>

<h2>Приведение типов</h2>
<?php
    $string = "5000";
    $number = (integer)$string; // изменяем тип данных на integer
    echo var_dump($number).'<br>'; //var_dump вывозит содержание(дополнительную информацию) переменной, точка перед <br> это конкатинация 
    echo $array.'<br>'; // <br> выводит echo на новую строку
    echo var_dump($array);
    //var_dump($array);
?>

<h2>Операторы присвоения</h2>
<?php
  $str = "foo";
  $str .= "bar"; // .= конкатинация(объединение) только для строк
  echo $str.'<br>';
  $num = 10;
  $num += 5;
  echo $num;
?>

<h2>Инкремент \ Декремент</h2>
<?php
  $a = 0;
  $b = 0;
  echo ++$a; //сначала выполняется инкремент потом записывается новое значение
  echo --$b;
?>

<h2>Условные операторы</h2>
<?php
  $road = "street"; // можно менять на "suburban" "highway"
  switch ($road) {
    case "street":
      $maxSpeed = 60;
      break;
    case "suburban":
      $maxSpeed = 90;
      break;
    case "highway":
      $maxSpeed = 120;
      break;
    default:
      $maxSpeed = 30;
  }
  $speed = 40;
  if ($speed > $maxSpeed + 60){
    echo "Вас лишили прав!";
  } elseif ($speed > $maxSpeed +20) {
    echo "Вы превышаете!";
  } else {
    echo "Проезжайте!";
  }
  echo '<br>';
  $a = 5;
  $b = 10;
  if ($a > 2 and $b < 10) { // условное И - && \ and
    echo $a + $b;
  } elseif ($a > 5 or $b > 0) { // условное ИЛИ - || \ or
    echo $a - $b;
  }
?>

<h2>Тернарный оператор (?)</h2>  
<?php // Работает также как и оперетор iF, но при его использовании вместо ключевых слов пишем "?". Сокращает конструкции if else. Лучше использовать в коротких конструкциях с минимальной смысловой наргрузкой.
  $a = 10;
/*  if ($a > 0) {
    $b = "Больше 0";
  } else {
    $b = "Меньше 0";
  } это то же самое что и строка ниже*/
  $b = $a>0 ? "Больше 0" : "Меньше 0"; // где $b = $a>0 условие if,"?" then, ":" else
  echo $b;
?>
<h2>Циклы</h2>
<?php
  $a = 0;
  while ($a < 10) {
    $a++;
    echo $a."<br>"; //сначала перепроверяет потом выводит
  }
  $b = 25;
  do {
    $b ++;
    echo $b."<br>"; // сначала выводит потом проверяет
  } while ($b < 10);
  
  $animals = ["Слон", "Кошка", "Собака", "Обезьяна"];
  for($i = 0; $i < count($animals); $i++) { // функция count возвращает длину массива, либо $i<5
    echo $animals[$i]." ";
  }
  
  echo "<br>";
  /* foreach как forof перебирает все элементы, в скобках что (перебирает) и as как по двум вариантам: $key=>$value, либо либо $value) */
  foreach($animals as $key=>$animal) { // Для каждого элемента из массива $animals как ключ=>значение
    echo $key." : ".$animal."<br>"; 
  }
  foreach($animals as $animal) { 
    echo $animal."<br>";
  }
?>

<h2>Функции</h2>
<?php // Функции в php не обращаются через . к элементам (точка занята конкатинацией), а только через параметры
$a = 5;
$b = 7;
echo getSum($a, $b);
echo "<br>";
function getSum($num1, $num2) {
  $result = $num1 + $num2;
  return $result;
}

//переменные внутри функции локальны,все остальные глобальны, и внутри циклов тоже 
echo getSumAB();// выведет 12,т.к. 5и7 были объявлены до 
$a = 10;
$b = 15;
function getSumAB() {
  global $a, $b; // без директивы global не удастся получить доступ к внешним переменным, без него создадутся локальные переменные с такими же именами причем пустые. Приведение типа Nul =0 (переменные создаются без их объявления let)
  $result = $a + $b;
  return $result;
}

?>

<h2>Работа с числами</h2>

<?php
$a = 3.14;
echo floor($a)."<br>"; // Округление вниз
echo round($a)."<br>";// Округление как в математике
echo ceil($a)."<br>";// Округление вверх

$a = 3.1456;
echo round($a, 2)."<br>";// Округление как в математике
echo rand(10, 100); // Получение случайного целого числа
?>


<h2>Функции работы со строками</h2>
<?php
  $string = "Съешь этих мягких французских булок";
  echo mb_strtolower($string)."<br>";// mb_ чтобы функция работала в русскими буквами. Без него работает с английскими
  echo mb_strtoupper($string)."<br>";
  echo mb_strlen($string)."<br>"; //strlen считает по байтам. 1 русская буква=2байта; пробел=1байт.С mb_ считает русские буквы без пробелов. Латинские буквы занимают 1байт.
  $name = "   Vasya  ";
  echo "/".$name."/<br>";
  echo "/".trim($name)."/";//при принятии вводных данных от пользователя обрабатывать функцией trim, которая убирает лишние пробелы слева и справа 
  
  //Поиск подстроки
  $strpos = mb_strpos($string, "съешь"); // чувствителен к регистру
  $stripos = mb_stripos($string, "съешь");//не чувствителен к регистру
  echo var_dump($strpos)."<br>";// хорошо для проверки наличия в строке
  echo var_dump($stripos)."<br>";// выводит номер позиции съешь в строке
  
  $stristr = mb_stristr($string, "этих");//возвращает кусок строки начиная с того места где нашел подстроку
  echo var_dump($stristr)."<br>";
  
  //Возвращение подстроки
  $bread = mb_substr($string, -5, 3); //начиная c конца (можно с начала) от -5 символа длиной в 3 символа
  echo $bread;
  
  //Разбитие стоки на массив
  echo "<br>";
  $array = explode(" ", $string); // Разбивает стоку. " " разделитель между элементами
  echo var_dump($array)."<br>";
  $newString = join(",", $array);// объединяет в строку
  echo $newString;
?>

<h2>Функции работы с массивами</h2>
<?php
  $animals = ["Слон", "Обезьяна", "Жираф", "Тигр", "Лама"];
  //Добавление/удаление из начала/конца массива
  array_push($animals, "Хомяк");//добавление в конец массива
  $animals[] = "Енот"; //упрощенная запись array_push для одного элемента
  echo var_dump($animals)."<br>";
  echo "<hr>";
  
  $animals = ["Слон", "Обезьяна", "Жираф", "Тигр", "Лама"];
  $lama = array_pop($animals);//Удаляет с конца
  echo var_dump($animals)."<br>";
  echo var_dump($lama)."<br>";
  echo "<hr>";
  
  $animals = ["Слон", "Обезьяна", "Жираф", "Тигр", "Лама"];
  array_unshift($animals, "Хомяк");//Добавляет в начало
  echo var_dump($animals)."<br>";
  echo "<hr>";
  
  $animals = ["Слон", "Обезьяна", "Жираф", "Тигр", "Лама"];
  $elephant = array_shift($animals);//Удаляет  из начала
  echo var_dump($animals)."<br>";
  echo var_dump($elephant)."<br>";
  echo "<hr>";
  
  $animals = ["Слон", "Обезьяна", "Жираф", "Тигр", "Лама"];
  $animals = array_reverse($animals); // Переворачивает массив не трогая его
  echo var_dump($animals);
  echo "<hr>";
  
  $animals = ["Слон", "Обезьяна", "Жираф", "Тигр", "Лама"];
  $animalsToTransfer = array_slice($animals, 1, 3);
  echo var_dump($animalsToTransfer);
  echo "<hr>";
  
  $animals = ["Слон", "Обезьяна", "Жираф", "Тигр", "Лама"];
  array_splice($animals, 1, 2, array("Хомяк", "Енот",));
  echo var_dump($animals);
  echo "<hr>";
  
  $animals = ["Слон", "Слон", "Обезьяна", "Обезьяна", "Обезьяна", "Обезьяна", "Жираф", "Тигр", "Лама", "Лама"];
  $animalslist = array_unique($animals);
  echo var_dump($animalslist);
  
  
  ?>
  