"use strict"

$('.balloon-container').css({
                          width: document.documentElement.scrollWidth,
                          height: document.documentElement.scrollHeight,
                          
                        });
                        
//let balloonInterval = setInterval(createBalloon, 3000);                       

function createBalloon() {

  
  let container = $('.balloon-container');
  let width = $(container).width();
  let height = $(container).height();
  
  let images = ['/resource/img/blueballoon.png', '/resource/img/greenballoon.png', '/resource/img/pinkballoon.png', '/resource/img/orangeballoon.png'];
  let balloonSrc = images[getRandomInt(0, images.length)];
  
  let balloon = document.createElement('img');
  $(balloon).attr('src', balloonSrc) 
            .css({
              height: "15rem",
              position: "absolute",
              top: height + "px", // числа в css передаем в чем-либо (px)
              left: getRandomInt(0, width - 50) + "px", // случайное распределение по ширине
              cursor: "pointer",
            })
            .appendTo(container) // appendTo prependTo - прикрерить balloon К чему-то (body)
            .animate({
              top: 0 - 300 + "px",
            }, 30000, () => {
            $(balloon).remove()
              game.addLoseCount();
            } ); /*функция-стрелка сокращение от function () {}, то же самое что:
                    , function() {
              $(balloon).remove() удаляем шарики наверху */
/*$(balloon).mousedown(() => {
    popBalloon(balloon);
  }) jquery не подошел*/
  balloon.onmousedown = () => {
    popBalloon(balloon);
  }
  
}


function popBalloon(balloon) {
  balloon.onmousedown = null;
  
  let popSound = new Audio('/resource/img/pop.wav');
  popSound.play();
  
  let confetti = balloon;
  $(confetti).stop().attr('src', '/resource/img/confetti.gif')
                    .css({
                      transform: "translateX(-50%)",
                      height: "10rem",
                    })
                    .fadeOut(2000, () => $(confetti).remove());
                    
  game.addCount(); // вызываем метод addCount() объекта game чтобы считалось кол-во лопнутых шаров
  
}
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
}

//-------Game-----

let game = { // создаем объект 

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

