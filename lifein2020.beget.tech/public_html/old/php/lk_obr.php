<?
//var_dump($_POST);
session_start();// запуск сессии. Есть связь между пользователем и сервером
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');
require_once('components/db.php');//сюда подключается код из db.php

foreach($_POST as $key=>$value) {
  changeData($key, $value);
}

//записывает новые значения в имя, дата рождения в личном кабинете:
function changeData($key, $value) { 
  global $mysqli;
  //var_dump($mysqli);
  //echo $key . "=>" . $value; 
  $id = $_SESSION['id'];
  
  if( empty($key) or empty($value) ) {
    exit("Поля не заполнены!");
  }
  
  $key = trim($key);
  $value = htmlspecialchars( trim($value) );
  
  //Защита от уязвимости:
  $restrictedKeys = ['id', 'login', 'password']; // массив запрещенных ключей, то что нельзя менять
  
  if( in_array($key, $restrictedKeys) ) {
    exit("айайай");
  }
  $result = $mysqli->query("UPDATE `users` SET `$key`='$value' WHERE `id`='$id'");
   if(!$result) {
     exit("Не удалось обновить данные");
   } else {
     $_SESSION [$key] = $value;
     exit("ok");
   }
}



