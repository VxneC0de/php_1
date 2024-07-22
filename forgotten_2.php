<?php

  include "connection.php";
  extract($_POST);
  $sql = "select ID from users where EMAIL='$forgot'";
  $q = mysqli_query($connection, $sql);

  if($v=mysqli_fetch_array($q)){
    $code = rand(100000, 999999);
    $sql_1 = "update users set CODE='$code' where ID='$v[0]'";
    mysqli_query($connection, $sql_1);
    $body = "Enter the code in the following link to recover the key: $code
    <a href="forgotten_3.php"></a>";

    mail("$forgot", "Key Recovery", $body, "From to web"){
      echo "Sent successfully, check your email";
    }else{
      echo "There is no record of the email entered, try again.";
    }
  }

  //despues que la persona crea las dos claves nuevas, borrar el codigo (RECORDAR AL PROFESOR)

?>