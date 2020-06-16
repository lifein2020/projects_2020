<?php
  $title = "Аутентификация";
  require_once("components/header.php");
?>
<!--.container>.row.justify-content-center>.col-6>form tab-->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-6">
      <h1 class="mt5">Аутентификация</h1>
      <form action="auth_obr.php" method="POST">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidde ="true"></i></span>
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
        <p class="text-danger d-none error"></p>
        <input type="submit" class="btn btn-primary btn-block" value="Войти">
      </form>
    </div>
  </div>
</div>
<script>
  let form = document.querySelector('form'); // AJAX
  form.onsubmit = send;
  function send(event) {
    event.preventDefault();
    let formData = new FormData(form);
    //console.log( formData.get('login') ); //метод FormData самостоятельно формирует строку auth_obr.php?login=vasya&pass=123456&
    
    fetch('auth_obr.php', { //fetch-promice обещай отправить сетевой запрос на сервер. Ассинхронный JS code
      method: "POST",
      body: formData,
    })
      .then(responce => responce.text()) // function(responce) {responce.text()} затем получай ответ и переводи его в тект
      .then(result => {
        if(result == "ok") {
          window.location.href = "lk.php"; 
        } else {
          // вместо alert(result); напишем:
          let errorElem = document.querySelector(".error");//чтобы выводить ответ между вводом пароля и кнопкой Войти
          errorElem.classList.remove('d-none');// убрать из классов d-none
          errorElem.innerHTML = result;
        } //добавить текст из result
      }); //затем показывай результат result-то что написали в exit
      //console.log("Отправлен запрос!:");
  }
</script>
<?php
  require_once("components/footer.php");
?>