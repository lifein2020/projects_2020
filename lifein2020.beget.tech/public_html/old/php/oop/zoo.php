<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');

// создаем интерфейс, где описываем методы, обязательнве для реализации классов:
interface AnimalAction {
  public function walk();
  public function speak();
}

abstract class Animal implements AnimalAction  { //экземпляр класса abstract создать нельзя. Существуют для наследования.
  protected $nick; // protected видно внутри классов, можно св-ва использовать во всех наследуемых классах. Можно делать и на функции7
  protected $gender;
  protected $color;
  
  public function __construct($nick, $gender, $color) {
    $this->nick = $nick;// -> это вызов св-ва, = присвоение значения
    $this->gender = $gender;
    $this->color = $color;
  }
  
  public function __get($property) {
    return $this->$property;
  }
  public function walk() {
    echo "Топ-топ-топ";
  }
  
}

class Horse extends Animal { //наследование
  
  protected $breed;
  
  public function __construct($nick, $gender, $color, $breed) {
    parent::__construct($nick, $gender, $color); //parent:: чтобы не переписывать construct
    $this->breed = $breed;
  }
  public function walk() {
    echo "Цок-цок-цок"; //методы наследуются если мы их не переопределили
  }
  public function speak() {
    echo "Иго-го";  
  }
  public static function getInfo() {
    echo "Табличка с описанием лошадей";
  }
}

class Pegasus extends Horse { //__construc наследуется автоматически. Если хотим туда что-то добавить в этом классе, тогда пишем заново.
  public function fly() {
    echo "Вы видите как $this->nick летает";
  }
}
/*$horse = new Horse("Абсент", "М", "Белый", "Мустанг"); //создаем объект
//$horse2 = new Animal("Сивый", "М", "Бурый");
//echo $horse->nick . " " . $horse->breed;
echo $horse->speak(); $horse->walk();*/
/*Horse::getInfo();// реализация метода без создания экземпляра этого класса через обращения к статическому методу напрямую*/

/*$pega = new Pegasus("Пега", "Ж", "Черный", "Мустанг");

echo $pega->nick . "<br>";
echo $pega->speak() . "<br>";
$pega->fly();*/

class Elephant extends Animal {
  protected $kind;
  public function __construct($nick, $gender, $color, $kind) {
    parent::__construct($nick, $gender, $color);
    $this->kind = $kind;
  }
  public function speak() {
    echo "трррру";  
  }
  public function hug() {
    echo "$this->nick обнимает вас хоботом";
  }
}
$eleph = new Elephant("Джон", "М", "серый", "африканский");
echo $eleph->nick . "<br>";
echo $eleph->gender . "<br>";
echo $eleph->color . "<br>";
echo $eleph->kind . "<br>";
echo $eleph->walk() . "<br>";
echo $eleph->speak() . "<br>";
$eleph->hug();


