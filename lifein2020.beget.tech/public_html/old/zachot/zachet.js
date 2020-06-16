//Вариант 1

/*1. Задача. Создайте переменную str и присвойте ей значение 'abcde'. Обращаясь к
отдельным символам этой строки выведите на экран символ 'a', символ 'b', символ 'e'*/

/*function task1() {
 let str = 'abcde';
}
console.log('a', 'b', 'e'); */


/*2. Задача. Дан массив с элементами 'Привет, ', 'мир' и '!'. Необходимо вывести на экран фразу
'Привет, мир!' 

let mass = ["Привет", "мир", "!"]; 
console.log(mass.join( )); */


//3. Задача. Если переменная a равна 10, то выведите 'Верно', иначе выведите 'Неверно'

/* let a = +prompt("Введите число!");
if (a == 10) {
  alert("Верно");
} 
else 
  alert("Неверно"); */
  
  
//4. Задача. Выведите столбец чисел от 1 до 50.

/*for (let i = 1; i < 51; i++) {
console.log(i);
}*/


//5. Задача. Даны переменные a = 10 и b = 3. Найдите остаток от деления a на b

/*function divisionResidue(a, b) {
  return a % b;
}
console.log(divisionResidue(10, 3));*/


/*function divisionResidue() {
  let a = 10; 
  let b = 3; 
  return a % b;
}
console.log(divisionResidue());*/


/*let a = 10; 
let b = 3; 
function divisionResidue(a, b) {
  return a % b;
}
console.log(divisionResidue(a, b));*/



/*6. Задача. Дана строка 'aaa@bbb@ccc'. Замените все @ на '!' с помощью глобального поиска
и замены.

let string = "aaa@bbb@ccc";
alert(string.replace(/@/g, '!'));*/
 

/*7. Задача. Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Объедините их вместе.

let letters = ["a", "b", "c"];
let numerals = ["1", "2", "3"];
let association = letters.concat(numerals); 
console.log(association);*/


/*8. Задача. Дана строка. Сделайте заглавным первый символ этой строки не используя цикл.
Найдите два решения.

let str = "василий";
alert(str[0].toUpperCase()+str.slice(1));
alert(str[0].toUpperCase()+str.substr(1, 6));*/


/*9. Задача. Сделайте функцию, которая возвращает куб числа. Число передается
параметром.

function cube(a) {
  return a**3;
}
console.log(cube(3));*/


/*10. Задача. Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть
выведите 'да', а если нет - выведите 'нет'.

function funk(arr, elem) {
  for( let i = 0; i < arr.length; i++) {
    if (arr[i] == elem) {
      return true;
    }
  }
return false;
}
let arr = [1, 3, 7, 2, 8, 5, 12, 11];
let elem = 5;
if (funk(arr, elem)) {
  alert('да');
} else {
    alert('нет');
  } */


/*11. Задача. Сделайте функцию, которая параметрами принимает 2 числа. Если эти числа равны -
пусть функция вернет true, а если не равны - false.

function funk(a, b) {
  if (a==b) {
    return true;
  } else{
    return false;
  }
}
alert(funk(3, 4));*/


/*12. Задача. С помощью цикла for сформируйте строку '123456789' и запишите ее в
переменную str 

let str = "";
for (i = 1; i <= 9; i++) {
  str += i;
}
alert(str);*/


/* 13. Задача. Заполните массив следующим образом: в первый элемент запишите 'x', во второй
'xx', в третий 'xxx' и так далее.

let arr = [];
let str = '';

for (let i = 0; i < 5; i++) {
	str += 'x';
	arr.push(str);
}

console.log(arr); */


/*14. Задача. Дан массив с числами. Создайте из него новый массив, где останутся лежать
только положительные числа. Создайте для этого вспомогательную функцию isPositive(),
которая параметром будет принимать число и возвращать true, если число
положительное, и false - если отрицательное.

function isPositive(num) {
  if (num > 0) {
    return true;
  } else {
    return false;
  }
}
var arr = [1, 3, -7, 2, 8, -5, -12, 11];
var newArr = [];
for (var i = 0; i < arr.length; i++) {
  if (isPositive(arr[i])) {
    newArr.push(arr[i]);
  }
}
console.log(newArr);*/


/*15. Задача. Дана строка. Сделайте заглавным первый символ каждого слова этой строки. Для
этого сделайте вспомогательную функцию ucfirst, которая будет получать строку, делать
первый символ этой строки заглавным и возвращать обратно строку с заглавной первой
буквой

function ucfirst () {
  let str = "я сдаю зачет";
  let str2 = str.split(" ");
  let newStr = "";
  for (i = 0; i < str2.length; i++) {
    let toZagl = str2[i].substring(0, 1).toUpperCase();
    let others = str2[i].substring(1, str2[i].length);
    newStr += toZagl + others + " ";
  }
console.log(newStr);
}
ucfirst();*/


/*16. Задача. Дан массив с числами. Выведите последовательно его элементы используя
рекурсию и не используя цикл

let arr = [1,2,3,4,5];

elem(arr);

function elem(arr){
  console.log(arr.shift());
  if (arr.length != 0){
  elem(arr);
  }

}*/


/*17. Задача. Выведите с помощью цикла столбец чисел от 1 до 100

for (i = 0; i <= 100; i++) {
  console.log(i);
}*/


/*18. Задача. Выведите на экран текущие день, месяц и год в формате 'год-месяц-день'.

let date = new Date();
console.log (date.getFullYear(), date.getMonth(), date.getDate()); */


/*19. Задача. Даны картинки. Привяжите к каждой картинке событие, чтобы по клику на картинку
алертом выводился ее src

<body>
  <div>
    <img src="1.png" id="img1">
    <img src="2.png" id="img2">
    <img src="3.png" id="img3">
  </div>
  <script>
    let elems = document.querySelectorAll("img");
    for (i = 0; i < elems.length; i++) {
    elems[i].onclick = func;
    }

    function func() {
    alert(this.getAttribute('src'));
    }
  </script>
</body> */


/* 20. Задача. Дан див. Внутри него вначале находится просто текст, а затем span:
<div> text <span>span</span></div> 
Получите первого потомка нашего дива с помощью firstChild и с помощью firstElementChild.
Сравните результаты.

<div> text <span>span</span> </div> 
<script>
 let div = document.getElementById('div');
 console.log(div.firstChild);
 console.log(div.firstElementChild);
</script>*/


  




