<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/userRegister.css">
  <title>Recover Key</title>
</head>
<body>

  <header class="header">
    <div class="logo-container">
        <h2 class="logo">PRPDUCTS</h2>
    </div>
</header>

<section class="main-container">

    <div class="login">
        <h2>Recover Key</h2>

        <form method="post" action="forgotten_4.php">

          <div>
            <span>
              <ion-icon name="mail"></ion-icon>
            </span>
            <input name="email_forgot" type="email" id="email_forgot" placeholder="admin@admin.com">
            <label for="forgot">Email</label>
            <div class="error"></div>
          </div>

          <div>
            <span>
              <ion-icon name="mail"></ion-icon>
            </span>
            <input name="codeRecover" type="text" id="codeRecover" placeholder="admin@admin.com">
            <label for="forgot">Code sent to the email</label>
            <div class="error"></div>
          </div>
            
          <button type="submit">ENTER</button>

        </form>

    </div>

</section>


  <script src="jquery.js"></script>

  <script src="./logic.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
</body>
</html>