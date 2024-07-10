<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./show_styles.css">
  <title>Search product</title>
</head>
<body>

<?php 
  include "menu.php"; 
  include "details.php";
?>

  <main style="margin-top: 100px;">

    <h1>SEARCH PRODUCT</h1>

    <form method="post" action="">

      <?php include "connection.php"; ?>

    <input list="products" type="text" name="search">
    
    <datalist id="products">
    <?php
    $sql = "select NAME from products";

    $consult = mysqli_query($connection,$sql);

    while($ver=mysqli_fetch_array($consult)){

      ?><option value="<?php echo $ver[0]; ?>">

      <?php } ?>
  
    </datalist>

    <button type="submit"><ion-icon name="search"></ion-icon></button>

    </form>

    <table border="1">

      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
        <th>PRICE</th>
        <th>AMOUNT</th>
        <th>IMG</th>
        <th>DATE</th>
      </tr>

      <?php

      include "connection.php";

      if(isset($_POST['search'])){
        $sql = "select * from products where NAME like '$_POST[search]%'";
      }else{
        $sql = "select * from products";
      }

      // el % es un comodin que significa cualquier cosa, si pones %% pone que encuentre todo que contentga esa letra, si pones el % al final, el que comience con esa letra o letras

      $consult = mysqli_query($connection,$sql);

      while($ver=mysqli_fetch_array($consult)){
      
      ?>
      
      <tr>
        <td><?php echo $ver[0]; ?></td> 
        <td><?php echo $ver[1]; ?></td>
        <td><?php echo $ver[2]; ?></td>
        <td><?php echo number_format($ver[3], 2, ",", ".")." $"; ?></td>
        <td><?php echo $ver[4]; ?></td>
        <td><img src="<?php echo $ver[5]; ?>" width="200"></td>
        <td><?php echo flipDate($ver[6]); ?></td>
      </tr>

      <?php } ?>

    </table>

  </main>

  <script src="jquery.js"></script>

  <script src="./logic.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  
  
</body>
</html>