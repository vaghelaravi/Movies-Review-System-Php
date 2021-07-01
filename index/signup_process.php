

<?php
	
	include 'conn.php';
	require 'phpmailer/PHPMailerAutoload.php';
			date_default_timezone_set("Asia/Kolkata");
			$name=$_POST["name"];
			$email=$_POST["email"];
			$psw=$_POST["psw"];
			
			$res1=$conn->prepare("select * from user where email =:email");
			$res1->bindparam(':email',$email);
			$res1->execute();
			$num=$res1->rowCount();

			if($num>0)
			{
			 	header("Location:signup.php?email=taken");
			}
			else
			{
				
			$token=md5($email.time());
			$res=$conn->prepare("insert into user values(null,:name, :email, :psw, :token ,0)");
			$res->bindparam(':name',$name);
		 	$res->bindparam(':email',$email);
		 	$res->bindparam(':psw',$psw);
		 	$res->bindparam(':token',$token);
			$res->execute();
			if ($res)
			{
			
			$mail= new PHPMailer;
			$mail->Host='smtp.gmail.com';
			$mail->Port=587;
			$mail->isSMTP();
			$mail->SMTPAuth=true;
			$mail->SMTPSecure='tls';
			$mail->Username='vaghelaravi690@gmail.com';//Your Email Address
			$mail->Password='ravi@comp20192019';//Your Email Password
			$mail->setFrom('vaghelaravi690@gmail.com','Notification');
			$mail->addAddress(''.$email);//Receiver Email
			$mail->addReplyTo('vaghelaravi690@gmail.com');
			$mail->isHTML(true);
			$mail->Subject='Sample Mail';
			$mail->Body='<h4>Please Click Following link For verifying And Activation Of Your account</h4>'.'<a href="http://localhost/MovieReviewSystem/email_verification.php?code='.$token.'"'.'>'.'Click here to verify</a>'.'<br>Powered by Ravi Vaghela';
			if ($mail->send())
			 {
				header("Location:login.php?signup=suceess");
			}
		
			}
		 	
			}    
?>	