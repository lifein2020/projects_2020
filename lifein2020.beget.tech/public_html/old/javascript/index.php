<<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Основы JavaScript</title>
</head>
<body>
  <h1>Изучаем JavaScript</h1>
  <script>
  "use strict"
  
  /*let name = "Василий!"; 
  name = "Петр";
  alert("Привет, " + name + "!"); */
  
  /*let userName = "Вася";*/
  
  /* const userName = "Вася"; 
  userName = "Петр";
  alert(userName); /* при объявлении переменной константа, ее нельзя потом перезаписать -> выдаст ошибку*/
  
  // Типы данных
  /*let number = 12345 // число
  let string = "Привет!" //строка
  let boolean = true; // булевое значение ИСТИНА/ЛОЖЬ true/false
  let nothing = null; //ничего
  let undef = undefined; //не определено
  let a; // a имеет значение undefined
  let object = {}; //объект
  
  let mass = []; // не настоящий тип данных - массив, он тоже объект
  
  let userOnline = ["Вася", "Петя", "Света"];
  
  alert(number*string); // выдаст NaN - ошибка вычислений
  alert(typeof userOnline); //typeof возвращает тип данных
  
  /* let computer = {
    color: "black",
    os: "Win10",
    hdmi: true,
    
    start() {
      //запустить комп
    }
    shutdown() {
      //выключить комп
    }
  } */
  
  /*Преобразование типов
  
  let a = "2" + 3;
  alert(q);*/
  
  /* let a =Number("2") + 3;
  let b = true + "5"; //Преобразовалось к строке
  let c = true + 5; // когда складываем с числом, то true ==1, false ==0
  let d = Number(null);
  let e = Number(undefined);
  let f = Number("2z");
  alert([a, b, c, d, e]);
  
  let a1 = Boolean(0); // false
  let b1 = Boolean(null); // false
  let c1 = Boolean(undefined); // false
  let d1 = Boolean(""); // false
  let e1 = Boolean("Текст"); // true, т.к. внутри переменной есть наполение
  let g1 = Boolean(42); // true
  
  alert([a1, b1, c1, d1, e1, g1]); */
  
  //Операторы. Операторы сравнения
  
  /* let a = 2;
  let b = 5;
  
  alert([a+b, a-b, b/a, a*b, a**b, b%a]); /* a**b - возведение в степень , b%a - остаток от деления */
  
  /*let a = "5";
  let b = 3;
  
  alert(+a + b); /* + перед a преобразование к числу и получится 8, без этого + будет читать как( строку и получится 53; +a == Number(a); */
  
  /*let a = 5;
  a = a + 5;
  alert (a);*/
  
  //Инкремент ++. Дикремент.
  
  /* let count = 0;
  count++; // count = count + 1; count == 1
  count++; // count == 2
  count--; // count = count - 1; count == 1
  alert(count); */
  
  /*let counter = 0;
  alert(counter++); /* сначала отобразит старое значение 0 потом прибавит 1 , т.е. отображение, после действие без отображения 
  alert(++counter); /* сначала прибавит 1 потом отобразит 0, т.е. действие, далее отображение результата */
  
 /* let counter = 0;
  let a = counter++;
  let b = ++counter;
  /* alert(counter++);
    alert(++counter);
  alert([a,b]); */
  
  
  /* когда нужно прибавить больше чем1
  
  let counter = 0;
  counter += 3; //counter = counter +3; += работает со всеми операторами
  alert(counter);
  
  let text = "foo";
  text += "bar"; // text == "foobar";
  alert(text); */
  
  //Функции позволяющие общаться с пользователеи без input
  
  /* let a = +prompt("Введите число", 0);
  let result = a + 5;
  alert(result);
  
  let ageCheck = confirm("Вам есть 18?");
  alert(ageCheck); */
  
  /* let userAge = +prompt('Введите ваш возраст!'); /* +prompt чтобы строку привести к числу */
  
  /* if (userAge >=18) { 
    alert('Вам можно на сайт!'); 
  } else {
    window.location.href = "http://yandex.ru";
  } */
  
  
  /* if (userAge >=40) { 
    alert('Вы такой взрослый!');
  } else if (userAge >=18) {
    alert('Вам можно на сайт!'); 
  } else {
    window.location.href = "http://yandex.ru";
  } */
  
  /* let a = 5 == "5"; /* == сравнивает и выдает true  если  два условия  выполняются тип  и значение 
  let b = 5 === "5"; 
  alert([a, b]); */
  
  /* let a = +prompt("Введите число!");
  
  if (a > 10) {
    alert("Больше 10");
  } else {
    alert("Меньше 10");
  } 
  
  Оператор вопрос ? сокращаем вышенаписанное вот в такой код: 
  
  a > 10 ? alert("Больше 10") : alert("Меньше 10");  в 1-м alert выводит когда true, во 2-м когда false */
  
  /* Число не входит в диапазон от 10 до 20:
  
let a = +prompt("Введите число");

if ( a < 10 || a > 20) { //  ||-или
  alert ("Число вне диапазона от 10 до 20");
} */

/*let a = +prompt("Введите число");

if (a >= 10 && a <= 20) { // && - и, оба условия выполняются и дают true
  alert("число внутри диапазона от 10 до 20");
} */



//Оператор не !

/* Если пользователь ничего не ввел:

let a = +prompt("Введите число"); /* если пользователь ничего не ввел то выйдет 0 при +prompt, пустая сторка а при prompt 

if(!a) { // (!a)-условие false, т.е. если не a (a не ввели) 
  alert("Надо было что-то ввести!");
} else {
  alert("Вы ввели"+a);
} */


// confirm выдает окошко с ок/отмена; true при нажатии ok, false при нажатии отмена 



/* if(!confirm("Вам есть 18?")) { // ! переворачивает условие
  alert("Вам сюда нельзя!");
}

// false(...) то что в скобках приводит к булевому значению */


/* Множественные условия. от 10 до 20 или 40-50

let a = +prompt("Введите число"); // isNan(a)

if((a >= 10 && a <= 20) || (a >= 40 && a <= 50)) {
  alert("Число в одном из диапазонов (10-20 40-50)");
} */


// Конструкция switch-case упрощает многочисленную конструкцию if else

/* let a = prompt("Введите Яблоко или Огурец или Смородина");

if (a == "Яблоко") {
  alert("это фрукт");
} else if (a == "Огурец") {
  alert("Это овощ");
} else if (a == "Смородина") {
  alert("Это ягода");
} else {
  alert("Неправильное значение!");
} */

// Напишем то же самое со switch:

/* let a = prompt("Введите Яблоко или Огурец или Смородина");
switch (a) { // проверяет переменную а
  case "Яблоко": // switch (a) case "Яблоко" это 1-й if 
    alert("Это фрукт");
    break; // без break case будет спускаться вниз пока не увидит break
  case "Огурец": // это else if
    alert("Это овощ");
    break;
  case "Смородина":
    alert("Это ягода");
    break;
  default: // default это else
    alert("Неправильное значение");
    break;
} */

// Циклы:
// while - пока do while - делай пока
// for - делай для

  /* let a = 0;
  
  while (a < 5) {
    alert(a);
    a++;
  } */
  
  
  /* let a = 0;
  do {
    alert(a);
  } while (a > 10) */
  
  // for позволяет отслеживать на каком этапе цикла мы находимся, для этого заводятся переменные i, j, key
  
  /*for (let i = 0; i < 5; i++) { /* let i = 0 заводим переменную для отчета шага; заводим условие i < 5; i++ сколько шагов мы должны пройти, с помощью этого перебирают массивы 
    alert(i); // цикл работает пока i<5
  } */
  
  //alert выводит сообщение пользователю
  //console выводит данные в консоль (fn F12 -> messages) для их проверки, отладке кода



// x xx xxx xxxx xxxxx - 5 циклов i, в каждом шагов=кол-во х = j

  /* for (let i = 1; i <= 5; i++) {
    let x = ""; // объявляем переменную равную пустой строке при каждом запуске цикла
    for (let j = 0; j < i; j++) {
      x += "x"; //x = x + "x"
      if (i == 3 && j == 1) {
       break; 
      }
    }
    console.log(x);
  } */
  
  
  // break - завершает досрочно цикл / continue  - пропускает шаг цикла
  
  /* for (let i = 0; i < 5; i++) {
    if(i == 3) { // когда цикл доходит до 3, то срабатывает continue перекидывает к следующему шагу и не отображает 3
      continue;
    }
    console.log(i);
  } */
  
  
  //Функция - программа внутри нашей программы
  /* в названии функции используют глаголы
  set - установить
  get - получить
  check - проверить
  create - создать
  make - сделать что-то чем-то
  delete - удалить
  move - двигать
  reset - сбросить */
  
 /* let string = "текст";
 let text = "другой текст";
 function makeTriple(sentence) { // умножает на 3; sentence параметр функции он как переменная внутри функции
   sentence = sentence + sentence + sentence;
   alert(sentence);
 } // только объявили функцию makeTriple
 makeTriple(string); // вызвали функцию; можно вложить любой параметр string/text/что-то другое */

  // Сколько этот текст будет дублироваться. Для этого добавляем параметр count
  
 /* let string = "текст";
 let text = "другойтекст";
 function makeMore(sentence, count = 1) { // сколько раз появиться Ф если ничего не ввели
   let result = "";
   for (let i = 0; i < count; i++) {
     result += sentence;
   }
   alert(result);
 } 
 makeMore("Ф", 10);*/
 
 // return завершает выполнение функции
 
 /* let string = "текст";
 let text = "другойтекст";
 
 let alertString = makeMore("A", 10);
 alert(alertString);
 
 function makeMore(sentence, count = 1) {  
   let result = "";
   for (let i = 0; i < count; i++) {
     result += sentence;
   }
   return result; // вернет строковое значение из переменной result */
   
   
 /* let string = "текст";
 let text = "другойтекст";
 
 let alertString = makeMore("A", 0);
 alert(alertString);
 
 function makeMore(sentence, count = 1) { 
   if (count < 1) {
     console.error("Неподходящий параметр count");
     return "Error";
   }
   let result = "";
   for (let i = 0; i < count; i++) {
     result += sentence;
   }
   return result; 
 } */
 
 // Область видимости
 
 /* let a = 10; //глобальная переменная, ее виднят внутри себя if for function, которые могут менять а внутри себя
 if (true) {
   console.log(a);
 }
  for (let i = 0; i < 1; i++) {
    console.log(a);
  }
 
 someFunc();
 function someFunc() {
   a += 5;
   console.log(a);
 }
 console.log(a); */
 
 
 /* let a = 10; //глобальная переменная
 
 if(true) {
   let b = 20; // локальная переменная для if
   console.log(b);
 }
 
 console.log(b); // вне if не видно b, с ней нельзя ничего сделать */
 
 
 /* let a = 10; //глобальная переменная
 
 if(true) {
   let b = 20; // локальная переменная для этого if
   console.log(b);
 }
 func();
 function func() {
   let b = 42; // локальная переменная для этой функции
   console.log(b);
 }
 func2();
 function func2() {
   let a = 55;
   console.log(a); // если названия переменных совпадают будет использоваться локальная
 } */
 
 
/* const a = 10;

func3();
function func3() {
  let a = 20;
  a += 5;
  console.log(a); // если названия переменных совпадают будет использоваться локальная
} */
 
 
/*const a = 10;
 
func3();
function func3() {
  let a = 20;
  a += 5;
  console.log(a); 
  
  func4(); // функция локальная для func3, видит локальную а и меняется вместе с ней
  function func4() {
    console.log("Я локальна для func3")
  }
} */
  
 // Обратные кавычки
 
 /* let userName = "Василий";
 let text = `
   <<div>
     <span>Привет, ${userName}!</span>
   </div>
  `
  console.log(text); */
  
  
 /* let computer = { // объект
    color: 'black', // cвойство объекта
    os:'Win10',
    diagolal: '17',
    
    powerOn() { // метод, т.е. то что умеет объект
      // код как в функции
      let greeting = `Привет, я компьютер мой цвет ${this.color}, OC ${this.os}`; 
      // tris возвращает объект к которому применим метод или свойство
      console.log(greeting);
    },
    
    shutDown() {
      // код как в функции
      console.log("Я выключаюсь");
    },
  } // конец описания объекта
  console.log(computer.os); // вызываем свойство. К свойствам и методам объекта обращаемся через точку
  computer.powerOn(); // вызываем метод
  console.log(computer.color); */
 
 
  /* // Методы работы с числами
  
  let a = 3.52;
  // Округление
  console.log( Math.floor(a) );
  //Округление вниз - 3
  //Math суперглобальный объект, который не надо объявлять. 
  console.log( Math.ceil(a) ); // Округление вверх - 4
  console.log( Math.round(a) ); // Округление как в математике - 4
  
  // Округление числа с числами после запятой / Обрезать число с числами после запятой
  let b = 3.239845764765;
  console.log(b.toFixed(2) ); // метод toFixed обрезает округляя как в математике 
  //Получение случайных чисел
  let random = Math.random(); // Возвращает число от 0 до 1 (не включая 1)
  // от 0 до определенного числа
  let num = Math.floor(Math.random() * 10 );
  let num2 = getRandomIntInclusive(50, 60); 
  console.log(num2);
  
  function getRandomIntInclusive(min, max) { // скопировали готовую функцию с https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/Math/random
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min; //Максимум и минимум включаются
  } */
  
  
 /* // Перевод в другую систему исчисления
  let a = 31;
  console.log( a.toString(2) );
  console.log( a.toString(16) );
  console.log( a.toString()); */
  
  //Методы работы со строками
  /* let text = "Съешь еще\nэтих мягких французских булок";
  alert(text); */
  
  /*let text = "Съешь еще этих мягких французских булок";
  //console.log(text.length); // выводит количество символов в строке
  
  let firstChar = text[0]; // вызвать нулевой размер строки
  let lastChar = text[text.length - 1]
  console.log( [firstChar, lastChar] ); // [] - массив
  // счет строки начинается с 0, количество считается с 1 -> length - 1 */
  
  // Изменение регистра
  /* let text = "Съешь еще этих мягких французских булок";
  text = text.toUpperCase();
  //text = text.toLowerCase();
   console.log(text);
   
  let email = "MyEmail@mail.ru".toLowerCase();
  
  console.log(email); */
  
  // Поиск подстроки
  /* let text = "Съешь ещё этих мягких французских булок";
  let breadPos = text.indexOf('булок');
  let morePos = text.indexOf('ещё', 10); // поиск с 10 символа. ('ещё', -34) считаем с конца но ищет слева направо
  let dutchPos = text.indexOf('голландских');
  console.log( [breadPos, morePos, dutchPos] ); */
  
  /* let link = "https://yandex.ru";
  let linkHasYandex = link.includes('yandex'); // строка содержит
  let linkStartsWithHttps = link.startsWith('https'); // начинается с
  let.linkEndsWithRu = link.endsWith('.ru'); // заканчивается на
  console.log( [linkHasYandex, linkStartsWithHttps, linkEndsWithRu] ); */
  
  /* let text = "Съешь ещё этих мягких французских булок";
   console.log( text.slice(6) ); //указываем начальную точку start и конечную точку end
  console.log ( text.slice(6,9) );
  console.log ( text.slice(-17, -6) ); */
  /* console.log( text.substring(6, 9)); // start может быть <  end
  console.log( text.substring(6, 9)); //только substring читает слева направо и справа на лево
  console.log ( text.slice(9, 6)); */
  /* console.log(text.substr (10, 4) ); // выдергиваем слово начиная с 10-го символа длиной в 4 символа
  console.log(text.substr (-5, 3) ); */
  
  // Сравниваются первые буквы слов. Буквы верхнего регистра меньше нижнего. от A до Z - от меньшего к большему. Если первые буквы одинаковые сравнивают по последующим.
  // Спец символы < Цифры < Англ.большие < Англ.мал < Рус.бол < Рус. мал 
  /* console.log( "Aple" < "Grape" ); 
  console.log( "aple" > "Aple" );
  console.log( "aple" < "pear" );
  console.log( "aple" < "apricot" );
  console.log( "aple" < "ананас" );
  console.log( "1a" < "aa" );
  console.log( "b" < "б" );
  console.log( "G" < "г" );
  console.log( " " < "a" );
  console.log( "." < "1" ); */
  
  /* let userName = "    Василий    ";
  console.log(userName);
  userName = userName.trim(); // Отрезает лишние пробелы слева и справа
  console.log(userName);
  console.log(userName.repeat(3) ); */
  
  /* let text = "Съешь ещё этих мягких французских булок";
  let text2 = "Кошка, Собака, Лошадь, Слон, Чупакабра";
  
  let arr = text.split(" "); // делит строку на массив по разделителю(разделитель задаем сами)
  let arr2 = text.split("");
  let animals = text2.split(", ")
  console.log(arr); 
  console.log(text2);
  console.log(arr2); */
  
  // Массивы(Array/arr) и методы массивов.
   // Элемент массива называется индекс, считается от 0 и далее
  
  /* let arr = [];
  let arr2 = new Array();
  let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра", 12, true, ["a", "b"], {} ]; // может содержать разные элементы
  
   let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
  console.log(animals[0]); // выводим в консоль элемент Кошка
  animals[3] = "Жираф"; // заменяем 3-й элемент
  console.log(animals);
  console.log(animals.length); // length длина массива - количество элементов в массиве */
  
   /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
   for (let i = 0; i < animals.length; i++) {
     animals[i] = animals[i].toLowerCase();
   }
  console.log(animals); */
  
  /* let articles = [
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, aliquam doloremque libero harum voluptate eos alias in modi cum suscipit iure quia officiis veritatis illo labore dolor saepe quaerat quasi.",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, autem ab quis recusandae nisi commodi iusto pariatur? Consequatur, quod necessitatibus quas voluptatibus omnis vitae ullam nulla ducimus libero. Earum, atque?",
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, tenetur, repellat, eum, nemo quos voluptatem deserunt et neque architecto incidunt maxime natus officiis dicta cum nulla sed pariatur repellendus obcaecati.", // лучше оставлять висячую запятую после последнего элемента цикла, чтобы не забыть
    ]; */
  
  
  // Методы работы с массивами push() pop() shift() unshift();
  // в этих методах внутрь () ничего не записывается
  /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
  // 3 равнозначных метода добавить в конец Черепаха
  animals[5] = "Черепаха";
  animals[animals.length] = "Черепаха";
  animals.push("Черепаха");
  console.log(animals); */
  
  /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
  let chupa = animals.pop(); // pop одновременно удаляет последний элемент "Чупакабра" из массива и записывает его в переменную chupa
  console.log(chupa);
  console.log(animals); */
  
  /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
  animals.unshift("Черепаха");
  console.log(animals); */
  
  /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
  let cat = animals.shift();
  console.log(cat);
  console.log(animals); */
  
  /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
  for (let animal of animals) { // задаем переменую animal в которую будет передаваться значение каждого элемента
    console.log(animal);
  } */
  
  // Многомерный массив (массив внутри массива)
  
  /* let zoo = [
    ["Собака", "Волк", "Гиена"],
    ["Белый медведь", "Бурый медведь", "Заяц"],
    ["Слон", "Жираф", "Чупакабра"],
    ];
    console.log(zoo[1][1]); // сначала обращаемся к номеру вольера потом к самому животному */
    
    // Удалить элемент из массива
    
    /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
    delete animals[2]; // оставляет пустой элементв массиве
    console.log(animals); */
    
    /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
    let horse = animals.splice(2, 1);// режет со 2-го элемента длиной в 1 элемент
    console.log(horse); //выводит массив с элементом Лошадь
    console.log(animals); */
    
    /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
    let animalsToExport = animals.splice(2, 2, "Черепаха", "Сурок", "Енот");
    console.log(animalsToExport); 
    console.log(animals); */
    
    /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
    animals.splice(-1, 0, "Черепаха", "Сурок");
    console.log(animals); */
    
   /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
    let animalsToFeed = animals.slice(0, 2);
    console.log(animals);
    console.log(animalsToFeed); */
  
  /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
  let animalsToFeed = animals.slice(-3, -1); // срез с Start -3го элемента(Лошадь) до End -1го элемента (Чупакабра)
    console.log(animals);
    console.log(animalsToFeed);  */
    
    //Concat(от конкатинация) - объединение
    // Когда надо соединить значения в один массив
    /* let aviary1 = ["Кошка", "Собака"];
    let aviary2 = ["Лошадь", "Слон"];
    let zoo = aviary1.concat(aviary2);
    console.log(zoo); */
    
    /* let text = "Привет мир!";
    let arr = text.split(""); // разделяет на символы пробелом
    arr.reverse(); // переворачивает массив
    text = arr.join("."); // сцепляет элементы массива по разделителю и возвращает string
    console.log(text); */
    
    /* let animals = ["Кошка", "Собака", "Лошадь", "Слон", "Чупакабра"];
    if ( animals.includes("Слон") ) { // если массив содержит Слон
      console.log( animals.indexOf("Слон") ); // то вывести в консоль номер элемента Слон
    } else { // иначе
      console.log("Слона нет"); //вывести в консоль Слона нет
    } */
    
    // Многомерный массив с ключами именными horses, dogs, africa. Для этого создаем объект куда заносим свойства key:value. В данном случае ключ принимает только значение строки.
    /* let zoo = {
      'horses' : ['Мама лошадь', 'Папа лошадь', 'Пони'],
      'dogs' : ['Собака', 'Волк', 'Гиена'],
      'africa' : ['', '', ''],
    }
    console.log(zoo['dogs'][1]); //dogs (key), 1 (value - значение) */ 
  
  // Класс - шаблон объекта с заданными свойствами, за пределы которого не выходит
  //Когда в виде ключа может быть что угодно 
  /* let map = new Map(); // Создаем объект класса Мар(класс==шаблон)
  map.set(1, "Value1"); // 1 - ключ, "Value1" - значение
  map.set('1', "Value2"); // присваиваем значение ключу
  map.set(true, "Value3");
  
  console.log( [map.get(1), map.get('1'), map.get(true)] ); //забираем значения по ключам */
  
  /* let vasya = {
    name: "Василий",
    lastname: "Петров",
  }
  let petya = {
    name: "Петр",
    lastname: "Петров",
  }
  let kesha = {
    name: "Иннокентий",
    lastname: "Петров",
  }
  let serega = {
    name: "Сергей",
    lastname: "Петров",
  }
  
  let adminMap = new Map();
  adminMap.set(vasya, true); // здесь ключом является объект
  adminMap.set(petya, false);
  adminMap.set(kesha, false);
  adminMap.set(serega, true); */
  
  /* console.log(adminMap.get(petya)); //выводим значения ключей 
  console.log(adminMap.get(vasya)); */
  
  /* for (let user of adminMap.keys()) { // перебираем ключи
    if ( adminMap.get(user) ) { // если user ==true
      console.log(user); // выводим этих юзеров
    }
  } */
  
  // set отличается от массива тем что хранит только уникальные значения
  
  /* let zoo = ["Кошка", "Кошка", "Кошка", "Кошка", "Собака", "Собака", "Собака", "Лошадь", "Слон", "Чупакабра"];
  let animalsList = new Set(zoo); // массив zoo превращает в коллекцию set. Задублированные значения выбрасывает
  console.log(animalsList); */
  
  // Рекрусивные функции
  // Рекурсивная функция - это функция которая вызывает саму себя;
  
  let balance = 200; // на балансе осталось 200руб
  getChange();
  
  function getChange() { // дает сдачу
    if (balance == 0) {
      return; // когда баланс становится 0, то дальнейшее выполнение функции прекращается
    }
    balance -= 10;
    console.log(10);
    getChange();
  }
  
  
  
  
  
  
  

  </script>
</body>
</html>