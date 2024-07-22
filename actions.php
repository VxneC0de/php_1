<?php

include "connection.php";
extract($_POST);
extract($_GET);
switch($hidden){
  case 1:
    //INSERTAR
  $sql = "insert into products values('', '$name', '$description', '$price', '$amount', '$img', '$date', '$status')";

    if(mysqli_query($connection, $sql)){
      header("location:insert.php?answer=1");
    }else{
      header("location:insert.php?answer=2");
    }

  break;
  case 2:
    //EDIT
    $sql = "update products set NAME='$name', DESCRIPTION='$description', PRICE='$price', AMOUNT='$amount', IMG='$img', DATE='$date', STATUS='$status' where id='$numberId'";

    if(mysqli_query($connection, $sql)){
      header("location:edit.php?answer=1");
    }else{
      header("location:edit.php?answer=2");
    }

  break;
  case 3:
    //DELETE
    //$sql = "delete from products where id=$e";
    $sql = "update products set STATUS=1 where id=$e";
    if(mysqli_query($connection, $sql)){
      header("location:show.php");
    }else{
      ?><script>alert("Could not delete")</script><?php
      header("location:show.php");
    }

  break;
  case 4:
    //REGISTER

    // para revisar si el nick o correo esta repetido
    $sqlNick = "select count(ID) from users where NICK='$nickRegister'";
    // para revisar si el email o correo esta repetido
    $sqlEmail = "select count(ID) from users where EMAIL='$emailRegister'";

    // consulta que va a la base de datos
    $conne_1=mysqli_query($connection, $sqlNick);
    $conne_2=mysqli_query($connection, $sqlEmail);

    // vector que trae la consulta
    $union_1=mysqli_fetch_array($conne_1);
    $union_2=mysqli_fetch_array($conne_2);

    if($union_1[0]>0){
      header("location:userRegister.php?answer=3");
    }else if($union_2[0]>0){
      header("location:userRegister.php?answer=4");
    }else{

      $sql = "insert into users values('', '$nickRegister', '$emailRegister', MD5('$confirmRegister'), 0, 0)";

      if(mysqli_query($connection, $sql)){
        header("location:userRegister.php?answer=1");
      }else{
        header("location:userRegister.php?answer=2");
      }

    }

  break;
  case 5:

    $sql = "select ID, NICK, EMAIL from users where (NICK = '$loginData' or EMAIL = '$loginData') and PASSWORD = MD5('$passwordLogin')";

    $conne=mysqli_query($connection, $sql);

    if($v = mysqli_fetch_array($conne)){
      session_start();
      $_SESSION['who'] = $v[0];
      $_SESSION['nick'] = $v[1];
      $_SESSION['email'] = $v[2];

      header("location:show.php");

    }else{
      header("location:userRegister.php?answer=5");
    }

  break;
  case 6:

    session_start();

    session_unset();
    session_destroy();
    header("location:userRegister.php");

  break; 

};


//if($name !== "" && $description !== "" && $price !== "" && $amount !== "" && $img !== "" && $date !== "" && $status !== ""){




?>