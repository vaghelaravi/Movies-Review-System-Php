 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="forgot_password_process.php" method="post">
      

        <center><h4>Enter Email For Forgot Password</h4></center>
        <?php
        if (isset($_GET['email']))
        {
        ?>
        <h4 style="color: red;">Email Not Exist...</h4>
        <?php
        }
        if (isset($_GET['send']))
        {
        ?>
         <h4 style="color: green;">Password Send In Your email Check Your Email.......</h4>
         <a href="login.php">Click here to login</a>
         <?php
          }
        ?>
        <fieldset>
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email" required="">
        </fieldset>
        </fieldset>
        <button type="submit">Forgotpassword</button>
        <a href="forgot_password.php" >Refresh Page</a>
      </form>
      
    </body>
</html>