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
    $sql="select NICK from users where nick='$nickRegister'";

    if(mysqli_query($connection, $sql)){
      header("location:userRegister.php?answer=3");
    }

    $sql="select EMAIL from users where nick='$emailRegister'";

    if(mysqli_query($connection, $sql)){
      header("location:userRegister.php?answer=4");
    }

    $sql = "insert into users values('', '$nickRegister', '$emailRegister', MD5('$confirmRegister'), 0, 0)";

    if(mysqli_query($connection, $sql)){
      header("location:userRegister.php?answer=1");
    }else{
      header("location:userRegister.php?answer=2");
    }

};


//if($name !== "" && $description !== "" && $price !== "" && $amount !== "" && $img !== "" && $date !== "" && $status !== ""){




?>