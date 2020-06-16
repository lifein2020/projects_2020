let answerButtonA = document.querySelector("input[value='Флоренция']"); 
 let answerTypeA = answerButtonA.getAttribute("value");

let rightAnswer="Рим"; 
//let answer=1  
if(answerTypeA==rightAnswer) {
  return true;
}
return false;

 
//--------вариант 1-------  
  function сhangeColor(event) {
    event.preventDefault();
    let answerButtonA = document.querySelector("input[value='Флоренция']"); 
    let answerTypeA = answerButtonA.getAttribute("value");
    let rightAnswer="Рим"; 
    
    if(answerTypeA==rightAnswer) {
      element.style.color = "black";
      element.style.background = "green";
    } else {
      element.style.color = "black";
      element.style.background = "red";
    }
}
//-----------вариант 2------------
let rightAnswerRim="Рим";
let rightAnswerPane="Пане каразу";

function сhangeColor(event) {
    event.preventDefault();
    let answerButton = document.querySelector("input[value='Флоренция']"); //как запросить все value?
    let answerType = answerButtonA.getAttribute("value");
    
    if(answerType==rightAnswerRim || answerType==rightAnswerPane) {
      element.style.color = "black";
      element.style.background = "success";
    } else {
      element.style.color = "black";
      element.style.background = "red";
    }
}

//------Если 1 кнопка с ответом нажата, то другие кнопки неактивны  
let answerType = document.querySelectorAll("input[name='onetype']");
for (let i = 0; i < answerType.length; i++) {
  if (сhangeColor){ // 
    break;
  }

//------Счетчик----

result.addCount(); 
let result = { // создаем объект 

  counterElem: document.querySelector('.counter'), //span со счетчиком
  count: 0, // свойство game
  winCount: 10, // условие выиграша
  
  loseCounterElem: document.querySelector('.loseCounter'),
  loseCount: 0,
  balloonsToLose: 3, //условие проигрыша
  
  addLoseCount() {
    this.loseCount++;
    this.loseCounterElem.innerHTML = this.loseCount;
    if (this.loseCount == this.balloonsToLose) {
      this.lose();
    }
  },
  
  lose() {
    alert("Вы проиграли :(");
    this.count = 0;
    this.counterElem.innerHTML = this.count;
  },
  
  addCount() { // метод объекта game
    this.count++;//обращение к свойству count объекта game, меняется счетчик
    // либо game.count
    this.counterElem.innerHTML = this.count; // меняется на экране счетчик через обращение к '.counter'
    if (this.count == this.winCount) {
      this.win()
      //game.win()
    }
  },
  
  win() {
    alert("Вы выиграли!");
    this.count = 0;
    this.counterElem.innerHTML = this.count;
  },
  
  
}



    
    
   
    
    
   
    //console.log(this.element.style.color = "red");
  }
/*function funk(question1, rightAnswer) {
  //question1[i] = 1
  for( let i = 0; i < question1.length; i++) {
    if (question1[i] == rightAnswer) {
      return true;
    }
  }
return false;
}


/*let changeButton = document.querySelector(".answer");
changeButton.style.color = "red";
changeButton.style.background = "success";
console.log(changeButton.style.color);
console.log(changeButton.style.background);//не выводит цвет background"a*/


//-----Не работает:------
/*let answerButton = document.querySelector("input[style='color']"); 
 let answerType = answerButton.getAttribute("style");
console.log(answerType);
answerButton.setAttribute("style", 'color', 'red');*/ 

/*let answerButtonA = document.querySelector("input[value='Флоренция']"); 
 let answerTypeA = answerButtonA.getAttribute("value");
console.log(answerTypeA);
answerButtonA.setAttribute("value", 'Неаполь');*/



/*let changeButton = document.querySelector(".answer");
console.log(changeButton);
//changeButton.classList.remove("btn-primary");
changeButton.classList.add("answer-success");*/

/*let elem = document.querySelectorAll(".coffee item");
  elem[1].onclick = function () {
    buyCoffee('Американо', 50, this);
  } 

let element = document.querySelectorAll(".answer");
for (let i = 0; i < element.length; i++) {
  element[i].onmousedown = function () {
    //changeColor(this);
    console.log(this.getAttribute('value'));
    console.log(this.element.style.color = "red");
  };
}*/
/*function changeColor(event) {
 console.log("Вы нажали на купюру");
 //event.preventDefault(); 
 element.style.color = "white";
}*/


/*let question1 = ["Флоренция", "Рим", "Венеция"];
let rightAnswer = "Рим";
if (funk(question1, rightAnswer)) {
  //console.log('верно');
  //pointInput.style.background = "";
} else {
  //pointInput.style.background = "red";
  }*/
 
/*let rightAnswer=2 
let answer=1  
if(answer==rightAnswer) {
  return true;
}
return false;*/

/*function divisionResidue(a, b) {
  return a + b;
}
console.log(divisionResidue(10, 3));*/

/*let a = prompt("Введите Флоренция или Рим или Венеция");
switch (a) { // проверяет переменную а
  case "Флоренция": // это 1-й if 
    alert("Неверно");
    break; // без break case будет спускаться вниз пока не увидит break
  case "Рим": // это else if
    alert("Верно");
    break;
  case "Венеция":
    alert("Неверно");
    break;
  default: // default это else
    alert("Неправильное значение");
    break;
} */

 
<!--<div class=\"container\">
  <div class= \"row\">
    <div class=\"col-6 test-question d-flex flex-column justify-content-around\">
      <h>1. Столица Италии?</h>
      <div class=\"col-6 test-list d-flex flex-column justify-content-around\">
        <p style=\"text-align: center min-height=\"5rem\"><button class=\"answer\" value=\"Флоренция\"></button>
        <p style=\"text-align: center\"><button class=\"answer\">Рим</button>
        <p style=\"text-align: center\"><button class=\"answer\">Венеция</button>
      </div>
    </div>
  </div>  
  
  <div class= \"row\">
    <div class=\"col-6 test-question d-flex flex-column justify-content-around\">
      <h>2. Как называется \"музыкальный хлеб\"?</h>
      <div class=\"col-6 test-list d-flex flex-column justify-content-around\">
        <p style=\"text-align: center\"><button class=\"answer\">Панеттоне</button>
        <p style=\"text-align: center\"><button class=\"answer\">Тьелла-ди-Гаэта</button>
        <p style=\"text-align: center\"><button class=\"answer\">Пане каразу</button>
      </div>
    </div> 
  </div>
</div>-->
