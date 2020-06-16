<?php
  session_start();
  $title = "Личный кабинет";
  if(!$_SESSION['id']) {
    header("Location: auth.php");
  }
  require_once("User.php");
  $user = new User($_SESSION['id'],
    $_SESSION['login'],
    $_SESSION['name'],
    $_SESSION['lastname'],
    $_SESSION['birthday']);
    //$user->Login = "NewLogin"; - приведет к ошибке 500
  //echo $user->login;
  require_once("components/header.php");
?>
<div class="container">
  <div class="row justify-content-center mt-5">
     <div class="col-8">
       <h1 class="text-center">Личный кабинет</h1>
       <h5>Добро пожаловать, <?php echo $user->getFullName()?></h5> <!--$user->getFullName() вместо $_SESSION['name']-->
       <p><b>ID: </b><span class="info"><?php echo $user->id?></span><span class="control"></span></p><!--$_SESSION['id']-->
       <p><b>Логин: </b><span class="info"><?php echo $user->login?></span><span class="control"></span></p> <!--$user->login вместо $_SESSION['login']-->
       <p>
         <b>Имя: </b>
         <span class="info" name="name">
           <?php echo $user->name?>
          </span>
          <span class="control">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <i class="fa fa-check d-none" aria-hidden="true"></i> <!-- d-none спрятать значек не виден на странице-->
            <i class="fa fa-times d-none" aria-hidden="true"></i>
          </span>
        </p>
        <p>
          <b>Фамилия: </b>
          <span class="info" name="lastname">
            <?php echo $user->lastname?>
          </span>
          <span class="control">
          </span>
        </p>
        <p>
          <b>Дата рождения: </b>
          <span class="info" name="birthday">
            <?php echo $user->birthday?>
          </span>
          <span class="control">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <i class="fa fa-check d-none" aria-hidden="true"></i>
            <i class="fa fa-times d-none" aria-hidden="true"></i>
          </span>
        </p>
     </div>
  </div>
</div>
<script>
  let pens = document.querySelectorAll(".fa-pencil");
  for(pen of pens){ // для каждого элемента из массива
    pen.onclick = startEdit;
  } 
  function startEdit() {
    let editBtn = this; // this получить текущую ручку pen
    let okBtn = editBtn.nextElementSibling; // okBtn - правый сосед editBtn, nextElementSibling получить его
    let cancelBtn = okBtn.nextElementSibling;
    //console.log([editBtn, okBtn, cancelBtn]);
    let infoSpan = editBtn.parentElement.previousElementSibling; // получаем родителя <span class="control"> и предыдущего соседа родителя <span class="info"> 
    //console.log(infoSpan);
    
    editBtn.classList.add('d-none'); //код для ручки 
    okBtn.classList.remove('d-none');
    cancelBtn.classList.remove('d-none');
    //У infoSpan заменить его предыдущее содержимое на input с этим содержимым:
    let oldData = infoSpan.innerHTML;//сначала получаем предыдущее содержание
    let dataName = infoSpan.getAttribute('name');
    infoSpan.innerHTML = `<input type='${dataName == "birthday" ? "date" : "text"}' value=${oldData} name=${dataName}>`;
    
    cancelBtn.onclick = function() { // код для крестика
      editBtn.classList.remove('d-none');
      okBtn.classList.add('d-none');
      cancelBtn.classList.add('d-none');
      infoSpan.innerHTML = oldData;
    }
    
    //получаем данные, необходимые для отправки в lk_obr.php. Теперь работает галочка и крестик
    okBtn.onclick = function() {
      let input = infoSpan.querySelector('input');
      let name = input.name; //input.getAttribute("name");
      let value = input.value;
      //console.log([name,value]);
      let control = {
        'editBtn' : editBtn,
        'okBtn' : okBtn,
        'cancelBtn' : cancelBtn,
        'infoSpan' : infoSpan,
      }
      changeData(name, value, control);
    }
  }
  
  function changeData(key, value, control) {
    let formData = new FormData();
    formData.append(key, value);
    //console.log( formData.get(key) );//key="name", ="birthday"
    fetch('lk_obr.php', {
      method: "POST",
      body: formData,
    })
      .then(responce => responce.text())
      .then(result => {
        if(result == "ok") {
          control.editBtn.classList.remove('d-none');
          control.okBtn.classList.add('d-none');
          control.cancelBtn.classList.add('d-none');
          control.infoSpan.innerHTML = value;
          alert("Изменения успешно внесены");
        } else {
          let input = control.infoSpan.querySelector('input');
          input.style.borderColor = "red";
          alert(result)
        }
      });
    
  }
</script>
<?php
  require_once("components/footer.php");
?>
