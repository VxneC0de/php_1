<?php

  include "connection.php";
  extract($_POST);
  $sql = "select ID from users where EMAIL='$email_forgot' and CODE='$codeRecover'";
  $q = mysqli_query($connection, $sql);

  if($v=mysqli_fetch_array($q)){
    ?>
    <form method="post" action="forgotten_5.php">

      <div>
        <span>
          <ion-icon name="lock-closed"></ion-icon>
        </span>

        <input type="password" id="passwordRegister" name="passwordRegister" maxlength="250" placeholder="********" required>

        <label for="passwordRegister">NEW PASSWORD</label>

      </div>

      <div>
        <span>
          <ion-icon name="lock-closed"></ion-icon>
        </span>

        <input type="password" id="confirmRegister" name="confirmRegister" maxlength="250" placeholder="********" required>

        <input type="hidden" name="code_user" value="<?php echo $v[0]; ?>">

        <label for="confirmRegister">CONFIRM PASSWORD</label>

      </div>

      <button type="submit" id="btnRegister">ENTER NEW PASSWORD</button>

    </form>
    <?php
  }else{
    header("location:forgotten_3.php?no=1");
  }

?>

<script>

  const form = document.querySelector('form');
  const passwordRegister = document.querySelector('#passwordRegister');
  const confirmRegister = document.querySelector('#confirmRegister');
  

  form.addEventListener('submit', (event) => {
    event.preventDefault();

    if(passwordRegister.value !== confirmRegister.value){
      alert('Passwords do not match. Try again');
      confirmRegister.focus();

      return;
    }
    
    form.submit();
  });

</script>