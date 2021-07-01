 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="signup_process.php" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required="">
          <?php
          if(isset($_GET['email']))
          {
          ?>
          <label for="email" style="color: red">Email Already Exist</label>
          <?php
          }
          ?>
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email" required="">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="psw" required="">
        </fieldset>
        
       
        
        </fieldset>
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>