 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email verification</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
      <?php
      include 'conn.php';
      if (!empty($_GET['code']) && isset($_GET['code'])) 
      {
          $msg="";
          
          $code=$_GET['code'];

        $res1=$conn->prepare("select * from user where token =:code");
        $res1->bindparam(':code',$code);
        $res1->execute();
        $num=$res1->rowCount();
        

        if($num>0)
          {
            $st=0;
            $res2=$conn->prepare("select id  from user where token =:code and status =:st");
            $res2->bindparam(':code',$code);
             $res2->bindparam(':st',$st);
             $res2->execute();
             $row=$res2->fetch();
                $num2=$res2->rowCount();
                if ($num2>0)
                {
                  $st=1;
                  $res3=$conn->prepare("update user set status =:st where token=:code");
                  $res3->bindparam(':st',$st);
                  $res3->bindparam(':code',$code);          
                  $res3->execute();

                $msg='<label style="color: green"'.'>Your Email Verify Sucessfully</br>Now you Can Login..</br><a href='."login.php".'>Click Here To Login</a>
                        </label>'; 
                }
                else
                {
                
                  $msg='<label style="color: green"'.'>Your Email Already Activated....</br><a href='."login.php".'>Click Here To Login</a>
                        </label>'; 
                }
                        
          }
          else
          {

               $msg='<h3 style="color: red"'.'>Wrong Activation Code</h3>';
          }
          
                
          
      }
      ?>
      <form>
        <fieldset>
          <center>
          <?php
          echo $msg;
          ?>
           </center>
        </fieldset>
        </fieldset>
          
        
        </div>
      </form>
       
       
    </body>
</html>