<?
  $title = "Узнать ИНН";
  require_once('components/header.php');
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-6">
      <h1 class="mt-5">Узнать ИНН</h1>
        <form action="inn_obr.php" method="POST">
          <h4 class="text-center">Личные  данные</h4>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Фамилия" name="fam">
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Имя" name="nam">
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Отчество" name="otch">
            </div>
            
            <p>Дата рождения</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="date" class="form-control" placeholder="Дата рождения" name="bdate">
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Номер паспорта" name="docno">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Узнать"> 
          </form>
        </div>
      </div>
    </div>
    <script>
        let form = document.querySelector('form');
        form.onsubmit = send;
        function send(event) {
          event.preventDefault();
          let formData = new FormData(form);
          fetch('inn_obr.php', {
            method: "POST",
            body: formData,
          })
            .then(responce => responce.json()) //метод json объекта responce  переводит ответ из формата json в ассоциативный массив. В случае JS это объект. А изначально json - это строка.
            .then(result => {
              if (result.code == 1) {
                alert("Ваш ИНН: "+result.inn);
              } else {
                if (result.message) {
                  return alert(result.message);
                }
                alert("Не удалось узнать ИНН");
              }
            });
        }
    </script>
    <?
      require_once('components/footer.php');