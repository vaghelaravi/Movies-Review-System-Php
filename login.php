 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="login_process.php" method="post">
        
        <h1>Login</h1>
        <?php
        if(isset($_GET['status']))
        {
        ?>
        <h4 style="color: red">Your Email Is Not Active...</br>Check Email For Activation Link</h4>
        <?php
        }
        ?>
         <?php
        if(isset($_GET['login']))
        {
        ?>
        <h4 style="color: red">Username or password are Incorrect</br></h4>
        <?php
        }
        ?>
        <?php
        if(isset($_GET['signup']))
        {
        ?>
         <center><h4 style="color: green">Signup Sucessfully....</h4>
          <h4 style="color: red">Check Your Mail For Activate Your Account..</h4>
          <h4 style="color: red">Without Activation You Can't Login In Website...</h4>
         </center>
         
        <?php
        }
        ?>
        <fieldset>
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email" required="">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="psw" required="">
        </fieldset>
        
       
        
        </fieldset>
        <button type="submit">Login</button>
        <a style="float: right;" href="signup.php">You Are Not Registered Than Click Here To Signup</a>
         <div style="float: right;">
          <a href="forgot_password.php">Forget Password</a>
        </div>
      </form>
       
       
    </body>
</html>