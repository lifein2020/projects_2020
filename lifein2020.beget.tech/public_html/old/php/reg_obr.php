<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');
require_once('components/db.php');

// Принимает данные, введенные пользователем при Регистрации. Код отправки в файле reg.php   
$login = $_POST['login'];
$pass = $_POST['pass'];
$passRepeat = $_POST['pass_repeat'];
$lastname = $_POST['lastname'];
$name = $_POST['name'];
$birthday = $_POST['birthday'];

$login = trim($login);
$lastname = trim($lastname);
$name = trim($name);
$birthday = trim($birthday);

//Функцией htmlspecialchars надо обрабатывать все вводящиеся пользователем данные чтобы защитить от уязвимости 
$login = htmlspecialchars($login);
$pass = htmlspecialchars($pass);
$passRepeat = htmlspecialchars($passRepeat);
$lastname = htmlspecialchars($lastname);
$name = htmlspecialchars($name);
$birthday = htmlspecialchars($birthday);

// empty проверяет пустое ли поле
if (empty($login) or empty($pass) or empty($passRepeat) or empty($lastname) or empty($name) or empty($birthday)) {
  exit("Не все поля заполнены!"); // функция exit работает как return в JS. После ее выполнения функция дальше не работает, например echo не отрабатывает. 
}

if ($pass != $passRepeat) {
  exit("Пароли не совпадают!");
}

//  '/^Регулярные выражения$/' помогают все условия проверки уместить в одну строку. 
if ( preg_match('/^[0-9a-zA-Z!@#$%^&*]{5,}$/', $pass) === 0 ) {
  exit("Пароль может состоять из латинских букв, цифр и !@#$%^&* и быть не менее 5 символов в длину!");
}

$pass = password_hash($pass, PASSWORD_BCRYPT); // шифрует пароли

$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'")->fetch_assoc(); //проверка зарегистрирован ли уже такой пользователь.("ВЫБРАТЬ ВСЕ СТОЛБЦЫ из таблицы users где столбец login = переменной login"). Если такого нет - NULL. ->fetch_assoc() чтобы результат выводился в виде ассоциативного массива

if (isset($result)) { // Если в result не NULL
  exit("Такой пользователь уже существует"); 
}

$result = $mysqli->query("INSERT INTO `users`(`login`, `password`, `lastname`, `name`, `birthday`) VALUES ('$login', '$pass', '$lastname', '$name', '$birthday')"); //$result переменная куда будет записываться результат нашего запроса в БД.Чтобы отправить сам sql запрос надо вызвать метод query объекта $mysqli. query - запрос, тело запроса(код sql) в кавычках скопирован из beget-SQL-insert. `id` формируется автоматом. В обратных кавычках названия таблицы, столбцов, в одинарных - переменные php.("Положить в таблицу с названием users в столбцы с названиями login, password и тд значения переменных $login и тд")
if(!$result) { // если нет результата
  exit("Не удалось добавить пользователя");
} else {
  exit("Пользователь $login успешно добавлен");
}



// Регулярные выражения помогают все условия проверки уместить в одну строку.



