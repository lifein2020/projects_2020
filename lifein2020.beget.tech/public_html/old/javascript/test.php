<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Test</title>
</head>
<body>
  <h1>Тест для диплома</h1>
  <script>
    function proverit(){
let pr_otv_zadachi_1 = 55;
let pr_otv_zadachi_2 = -9;
let pr_otv_zadachi_3 = 85;
let otv_uch_1 = document.getElementById('z_1').value;
let otv_uch_2 = document.getElementById('z_2').value;
let otv_uch_3 = document.getElementById('z_3').value;
let ball = 0;
if(otv_uch_1 == pr_otv_zadachi_1){
 ball +=1;
}
if(otv_uch_2 == pr_otv_zadachi_2){
 ball +=1;
}
if(otv_uch_3 == pr_otv_zadachi_3){
 ball +=1;
}
let vsego_zadach = 3;
let procent_vip;
procent_vip = ball/vsego_zadach * 100;
document.getElementById('rezultat').innerHTML = "Задания выполнены верно на "+procent_vip+"%.";
}


  </script>
</body>
</html>

