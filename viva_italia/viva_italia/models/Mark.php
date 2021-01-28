<?

class Mark {
  private $id; // данные которые пришли из бд делаем приватными
  private $top;
  private $name;
  private $desc;
  private $image;
  private $image1;
  
  public function __construct($id, $top, $name, $desc, $image, $image1) {
    $this->id = $id;
    $this->topic = $top;
    $this->name = $name;
    $this->description = $desc;
    $this->image = $image;
    $this->image1 = $image1;
  }
  
  public function __get($property) {
    return $this->$property;
  }
  
  public static function getAll() {
    global $mysqli; //подключаем бд
    $result = $mysqli->query("SELECT * FROM `marks` WHERE 1");//перебирает все элементы бд из таблицы `cards` и сомпонуем их в массив
    for($data = []; $row = $result->fetch_assoc(); $data[] = new Mark($row['id'], $row['topic'], $row['name'], $row['description'], $row['image'], $row['image1']) );// i это пустой массив $data = [], пока fetch_assoc() может перебирать наши данные из бд, он выдает ассоциативный массив, когда не может выдает Null и цикл перестает работать, $data[] = new Product(сокращенный push) - на каждом шаге цикла создай массив из наших продуктов
    //for($data = []; $row = $result->fetch_assoc(); $data[] = $row); //data[] = $row(сокращенный push) - на каждом шаге цикла создай массив из наших объектов
    //while($row = $result->fetch_assoc() ) {}
    
    return $data;//возвращает массив из всех элементов
  }
  
  public static function getByTop($top) {
    global $mysqli;
    $result = $mysqli->query("SELECT * FROM `marks` WHERE `topic`='$top'")->fetch_assoc(); // ищет товар с определенным topic
    if(isset($result)) { //если установлен result и он не равен NULL
      return new Mark($result['id'], $result['topic'], $result['name'], $result ['description'], $result['image'], $result['image1']);//тогда возвращай продукт(1 элемент) с данными из бд
    }
    return null;
  }
  
}

