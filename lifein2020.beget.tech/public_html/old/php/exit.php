<?php
session_start(); // сначала подключаемся к сессии
session_destroy();//уничтожаем сессию
header('Location: auth.php');//редирект с помощью php. Работает только когда нет выше заголовков html