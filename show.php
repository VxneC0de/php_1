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
        <th>NAME
          <a href="show.php?n=NAME&fu=asc"><ion-icon name="arrow-up"></ion-icon></a>
          <a href="show.php?n=NAME&fu=desc"><ion-icon name="arrow-down"></ion-icon></a></th>
        <th>DESCRIPTION
          <a href="show.php?n=DESCRIPTION&fu=asc"><ion-icon name="arrow-up"></ion-icon></a>
          <a href="show.php?n=DESCRIPTION&fu=desc"><ion-icon name="arrow-down"></ion-icon></a></a>
        </th>
        <th>PRICE
          <a href="show.php?n=PRICE&fu=asc"><ion-icon name="arrow-up"></ion-icon></a>
          <a href="show.php?n=PRICE&fu=desc"><ion-icon name="arrow-down"></ion-icon></a></a>
        </th>
        <th>AMOUNT
          <a href="show.php?n=AMOUNT&fu=asc"><ion-icon name="arrow-up"></ion-icon></a>
          <a href="show.php?n=AMOUNT&fu=desc"><ion-icon name="arrow-down"></ion-icon></a></a>
        </th>
        <th>IMG
          <a href="show.php?n=IMG&fu=asc"><ion-icon name="arrow-up"></ion-icon></a>
          <a href="show.php?n=IMG&fu=desc"><ion-icon name="arrow-down"></ion-icon></a></a>
        </th>
        <th>DATE
          <a href="show.php?n=DATE&fu=asc"><ion-icon name="arrow-up"></ion-icon></a>
          <a href="show.php?n=DATE&fu=desc"><ion-icon name="arrow-down"></ion-icon></a></a>
        </th>
      </tr>

      <?php

      include "connection.php";

      if(isset($_GET['n'])){
        $sql = "select * from products order by ".$_GET['n']." ".$_GET['fu'];
      }else{
        $sql = "select * from products";
      }

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

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  
  
</body>
</html>