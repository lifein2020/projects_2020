<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');

class User { //создаем класс

  private $name; //public, private, protected - модификаторы доступа описывают свойства. Относятся к $this->name.//Инкапсуляция
  private $lastname; 
  private $dender;
  private $birthday;
  
  public function __construct($name, $lastname, $gender, $birthday, $father = null, $mother = null) { // вызывается всегда при создании объекта. Для необязательных св-в = null.
    $this->name = $name; // привязываем свойство. Где св-во применятся. 
    $this->lastname = $lastname;
    $this->gender = $gender;
    $this->birthday = $birthday;
    $this->father = $father;
    $this->mother = $mother;
    
    $this->nameLength = mb_strlen($this->name);
  }
  
  public function getName() { //доступ к свойствам только для чтения
    return $this->name;
  }
  public function getLastname() { 
    return $this->lastname;
  }
  public function getGender() { 
    return $this->gender;
  }
  public function getBirthday() { 
    return $this->birthday;
  }
  
  public function setGender($gender) {
    $allowed = ["М", "Ж"]; //разрешенные значения
    if (!in_array($gender, $allowed)) {
      return;
    }
    $this->gender = $gender;
  }
  
  public function hello() { // метод класса
    echo "Привет, меня зовут $this->name $this->lastname";  
  }
  
}

$vasya = new User("Василий", "Петров", "М", "12.03.1987"); // Параметры в скобках передаются в скобки function __construct. Объект этого класса. Название с большой буквы.
//$vasya->name = "Петр";
//echo $vasya->getBirthday();
//$vasya->hello();
//$vasya->setGender("Ж");
//echo $vasya->getGender();
$kira = new User("Кира", "Петрова", "Ж", "23.07.1989");
//echo var_dump($kira->father);
$lina = new User("Лина", "Петрова", "Ж", "07.03.2010", $vasya, $kira);

echo var_dump($lina->father).'<br>';
echo $lina->father->getName();//получаем имя отца через ребенка

