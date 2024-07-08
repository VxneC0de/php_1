<?php

include "connection.php";
extract($_POST);
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
    //EDITAR
    $sql = "update products set NAME='$name', DESCRIPTION='$description', PRICE='$price', AMOUNT='$amount', IMG='$img', DATE='$date', STATUS='$status' where id='$numberId'";

    if(mysqli_query($connection, $sql)){
      header("location:edit.php?answer=1");
    }else{
      header("location:edit.php?answer=2");
    }

  break;
};


//if($name !== "" && $description !== "" && $price !== "" && $amount !== "" && $img !== "" && $date !== "" && $status !== ""){




?>