<?php

  session_start();

  include "../connection.php";
  extract($_POST);

  $date = date("Y-m-d");
  $hour = date("H:i:s");

  $sql = "insert into chatbox values('', '$_SESSION[who]','$ask', '', '$date', '$hour', 0)";

  mysqli_query($connection, $sql);

  $max = "select max(ID) from chatbox";
  $r = mysqli_query($connection, $max);
  $m = mysqli_fetch_array($r);

  $word = explode(" ", $ask);

  for($i=0; count($word) > $i; $i++){

    $wo = $word[$i];

    $sql = "select ANSWER from words where KEYWORD like '$wo' ";
  };

  $q=mysqli_query($connection, $sql);

  if($v = mysqli_fetch_array($q)){

    $up="update chatbox set ANSWER = '$v[0]' where ID='$m[0]'";

    mysqli_query($connection, $up);

  }else{

    $up="update chatbox set ANSWER = 'Your question is not in our records, sorry' where ID='$m[0]'";

    mysqli_query($connection, $up);

  }

  header("Location:../show.php");

?>