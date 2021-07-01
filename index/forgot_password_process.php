<?php

	
	include 'conn.php';
	require 'phpmailer/PHPMailerAutoload.php';

			$email=$_POST["email"];
			$res=$conn->prepare("select * from user where email =:email");
			
		 	$res->bindparam(':email',$email);

			$res->execute();

			
			
			$row=$res->fetch();
			$num=$res->rowCount();
			if($num>0)
		    {
		    
			$mail= new PHPMailer;
			$mail->Host='smtp.gmail.com';
			$mail->Port=587;
			$mail->isSMTP();
			$mail->SMTPAuth=true;
			$mail->SMTPSecure='tls';
			$mail->Username='vaghelaravi690@gmail.com';//Your Email Address
			$mail->Password='ravi@comp20192019';
			$mail->setFrom('vaghelaravi690@gmail.com','Notification');
			$mail->addAddress(''.$email);//Receiver Email
			$mail->addReplyTo('vaghelaravi690@gmail.com');
			$mail->isHTML(true);
			$mail->Subject='MovieReviewSystem Password Recover';
            
			$mail->Body='<h3>Your MovieReviewSystem Account Password Is:'.$row['psw'].'</h3></br><h5>Do Not Share Password</h5>';
			if($mail->send())
			{
			header("Location:forgot_password.php?send=yes");
			}
			
			}
			else
			{
				header("Location:forgot_password.php?email=no");
			}






?>