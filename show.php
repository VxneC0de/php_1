<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./show_styles.css">
  <title>List of Products</title>
</head>
<body>

  <main>

    <h1>LIST OF PRODUCTS</h1>

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
      $sql = "select * from products";
      $consult = mysqli_query($connection,$sql);

      while($ver=mysqli_fetch_array($consult)){
      
      ?>
      
      <tr>
        <td><?php echo $ver[0]; ?></td> 
        <td><?php echo $ver[1]; ?></td>
        <td><?php echo $ver[2]; ?></td>
        <td><?php echo $ver[3]; ?></td>
        <td><?php echo $ver[4]; ?></td>
        <td><img src="<?php echo $ver[5]; ?>" width="200"></td>
        <td><?php echo $ver[6]; ?></td>
      </tr>

      <?php } ?>

    </table>

  </main>

  <script src="jquery.js"></script>

  <script src="./logic.js"></script>

  
  
</body>
</html>