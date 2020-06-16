<?php
  $title = "Регистрация";
  require_once("components/header.php"); // такой код для тех компонентов которые будут повторятся на всех страницах
  //require()
  //include() include_once() 
?>
    <div class="container"> <!-- создаем для инпутов контейнер, row, col -->
      <div class="row justify-content-center">
        <div class="col-6">
          <h1 class="mt-5">Регистрация</h1>
          <!--Начинается форма. Все инпуты кладутся в форму. Запросы(данные) отправляются с помощью форм, тех самых инпутов которые создаем. Так чистый php общается с чистым html без JS. -->
          <form action="reg_obr.php" method="POST"> <!-- при методе GET видно тело Запроса в адресной строке. POST передает данные конфиденциально. action - куда пердает данные, method - как передает>
            <!--Первый инпут. Скопирован из бутстрапа с удалением лишнего -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Имя пользователя" name="login"> 
              <!-- name="login" это ключ ассоциативного массива см ниже -->
            </div>
            <!-- Второй инпут-->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Пароль" name="pass">
            </div>
            
             <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Повторите пароль" name="pass_repeat">
            </div>
            <h4 class="text-center">Личные  данные</h4>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Фамилия" name="lastname">
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Имя" name="name">
            </div>
            <p>Дата рождения</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-bath" aria-hidden="true"></i></span>
              </div>
              <input type="date" class="form-control" placeholder="Дата рождения" name="birthday">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Зарегистрироваться"> <!-- событие submit - событие отправки формы. Все инпуты формируются в качестве ассоциативного массива и отправляется туда куда укажем позже-->
            <!-- У ассоциативного массива значения-это то что пользователь вбил, ключи (их имя "login") вписывается в input атрибут name.(см выше).По ключам php или иной веб бэк енд, работающий с отправкой форм, будет отличать инпуты друг от друга.-->
          </form>
        </div>
      </div>
    </div>
    
<?php 
  require_once('components/footer.php');
?>