<?php

include "connection.php";
extract($_POST);
$sql = "update users set PASSWORD=md5('$confirmRegister'), CODE='0' where ID='$code_user'";
mysqli_query($connection, $sql);

header("location:userRegister.php");

?>