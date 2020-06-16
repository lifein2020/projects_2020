"use strict"

/*let a = 6;
let b = 4;
let h = 2;
function trapezeSquare(a, b, h) {
  return a * b / h;
}
console.log(trapezeSquare(a, b, h)); 


function trapezeSquare(a, b, h) {
  return a * b / h;
}
console.log(trapezeSquare(5, 8, 4)); */ 


/*function divisionResidue() {
  let a = 10; //внутренние переменные
  let b = 3; 
  return a % b;
}
console.log(divisionResidue());*/

/* let a = 10; //внешние переменные
let b = 3; 
function divisionResidue(a, b) {
  return a % b;
}
console.log(divisionResidue(a, b));*/

/*function divisionResidue(a, b) {
  return a % b;
}
console.log(divisionResidue(11, 3));*/


/* let euroRate = 80.6650;
let $Rate = 74.5450;
let rub = prompt ("Сколько рублей Вы хотите сконвертировать в евро?", "");
function euro(rub, euroRate) {
  return rub / euroRate;
}
alert(euro(rub, euroRate));
let rub1 = prompt ("Сколько рубрей вы хотите конвертировать в доллары?", "");
function dollar(rub1, $Rate) {
  return rub / $Rate;
}
alert(dollar(rub, $Rate)); */

/*let s1 = "Coding";
let s2 = "in";
let s3 = "javaScript";
function documentWrite(s1 , s2, s3) {
  return s1 +" " + s2 + " " + s3;
}
alert(documentWrite(s1, s2, s3));*/

/*let x = 5;
let y = 9;
let z = x + y;
alert(z); */

/*let x = 7.5;
let a = x*2;
let b = x*3;
console.log(a, b);*/

/*let x = 6e6; // == 6*10 в степени6 == 6000000
x = x / 3;
alert(x); */

/*let x = 9;
let b = "значение x равно 9";
let c = "значение х в квадрате"
/* function write(x, b) {
  return x + " " + b;
}
alert(write(x, b));
alert( x + " " + b );
alert(x**2 + " " + c);

let f = prompt("введите число", "");
alert(f*10); */


/* let k = +prompt("введите число", 0); // + перед prompt преобразует введенную цифру в число
alert([k - 1, k, k + 1]); */

/*let m = +prompt("введите массу тела");
let v = +prompt("введите скорость");
alert(m*(v**2)/2);*/

//------Циклы-----

/*let array = [1, 2, 3, 4, 5];
/*alert ( array[0] );
alert( array[1] );
alert( array[3])
alert( array [4] );
for (let i=1; i < 6; i++) {
  alert(i);
}*/

/*for (let i=1; i<101; i+1) {
  console.log(i+1);
}

let a = prompt("Введите число от 1 до 10", "");
if (a == 10) {
  alert("Верно");
}
else {
  alert("Неверно");
}*/

//-----Диплом----

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



