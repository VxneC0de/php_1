<?php

include "connection.php";
extract($_POST);
switch($hidden){
  case 1:
  $sql = "insert into products values('', '$name', '$description', '$price', '$amount', '$img', '$date', '$status')";

    if(mysqli_query($connection, $sql)){
      header("location:insert.php?answer=1");
    }else{
      header("location:insert.php?answer=2");
    }

  break;

};


//if($name !== "" && $description !== "" && $price !== "" && $amount !== "" && $img !== "" && $date !== "" && $status !== ""){




?>