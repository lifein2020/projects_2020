"use strict"

//----Нажимаем на кнопку----

let element = document.querySelectorAll(".answer"); //находим все кнопки с классом answer
for (let i = 0; i < element.length; i++) { //на каждый элемент массива,содержащего все найденные answer,
  element[i].onmousedown = сhangeColor // вешаем событие, выполняющее функцию сhangeColor(что она делает см ниже)
}

  function сhangeColor(event) {
    event.preventDefault();
    let answerButton = this; //отлавливает классы и атрибуты той кнопки,на которую нажали
    let answerType = answerButton.getAttribute("question");//присваиваем переменной значения всех отловленных атрибутов question 
    
      if(answerType=="right") { // если значене атрибута question совпадает с right
      answerButton.style.color = "black"; // то меняем цвет шрифта кнопки
      answerButton.style.background = "green";// то меняем цвет кнопки
    } else {
      answerButton.style.color = "black";
      answerButton.style.background = "darkred";
    }
      console.log(answerButton);
  }
 
 //---------Пройти тест заново----- 
let element2 = document.querySelector(".onetime");//находим кнопку 
element2.onmousedown = resetColor;//вешаем на нее событие
  function resetColor(event) { //которое
    event.preventDefault();
    let again = document.querySelectorAll('.answer');
    for (let i = 0; i < again.length; i++) { // у всех кнопок с классом answer
      again[i].style.color = "white"; // меняет цвета
      again[i].style.background = "grey";
    }
  console.log();
}
    