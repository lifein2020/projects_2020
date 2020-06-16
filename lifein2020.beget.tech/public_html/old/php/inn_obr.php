<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');

$fam = htmlspecialchars( trim($_POST['fam']) );
$nam = htmlspecialchars( trim($_POST['nam']) );
$otch = htmlspecialchars( trim($_POST['otch']) );
$bdate = htmlspecialchars( trim($_POST['bdate']) );
$docno = htmlspecialchars( trim($_POST['docno']) );

if ( empty($fam) or empty($nam) or empty($otch) or empty($bdate) or empty($docno) ) {
  $responce = array("code" => 0, "message" => "Не все поля заполнены");
  exit(json_encode($responce));
}

//переводим дату из 1983.03.29 в 29.03.1983 двумя способами
$bdate = explode('-', $bdate);
$bdate = array_reverse($bdate);
$bdate = join('.', $bdate);
//$bdate = date("d.m.Y", strtotime($bdate));

$docno = str_replace(" ", "", $docno);
//if(mb_strlen($docno) !=10) {
if( !preg_match('%^[0-9]{10}$%', $docno) ) { // %^[0-9]{10}$% регулярное выражение
  exit("Некоректный номер паспорта!");
}
$docno = mb_substr($docno, 0, 2) . " " . mb_substr($docno, 2, 2) . " " . mb_substr($docno, 4);

$url = "https://service.nalog.ru/inn-proc.do";// F12->Network->Headers->General->Request URL
$data = "c=innMy&captcha=&captchaToken=&fam=$fam&nam=$nam&otch=$otch&bdate=$bdate&bplace=&doctype=21&docno=$docno&docdt="; // F12->Network->Headers->Form Data->view source

$result = getCurl($url, $data);
//echo var_dump($result);
exit(json_encode($result));//  кодирует ассоциативный массив в формат json для отправки в JS

function getCurl($url, $data) { // $url куда $data, что будем отправлять
  $curl = curl_init(); // Инициализируем сессию curl; Имеет множество настроек,например, в одной сессии может делать несколько запросов
 // Настройки:
 curl_setopt($curl, CURLOPT_URL, $url);//На какой URL идет запрос
 curl_setopt($curl, CURLOPT_POST, true); // Используем метод POST
 curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Тело запроса POST
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);//Получаем"чистый" ответ
 //curl_setopt($curl, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); //скрываю свое местоположение. Как будто запрос с другого сервера.
 //curl_setopt($curl, CURLOPT_PROXY, "212.47.243.156:3128");//https://hidemy.name/ -> Сервисы -> Прокси-лист -> копируем оттуда адрес и порт
 $result = curl_exec($curl); // Выполняем запрос curl
 curl_close($curl); // Закрываем сессию curl
 //return $result; //выдает объект JSON-формат данных JavaScript Object Notation
 return json_decode($result, true);// Преобразование JSON в ассоциативный массив, понятный php
 
}


