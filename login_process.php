<?php
	session_start();
	include 'conn.php';
			
			$email=$_POST["email"];
			$psw=$_POST["psw"];
	
			$res=$conn->prepare("select * from user where email =:email and psw =:psw");
			
		 	$res->bindparam(':email',$email);
		 	$res->bindparam(':psw',$psw);

			$res->execute();

			$num=$res->rowCount();
			
			$row=$res->fetch();
            
            
            	if($num>0)
				{
					if($row['status']==1)
		            {
		            	$_SESSION['login']=$row['email'];
					    header('location:index.php?login=sucess');
		            	
		            }
		            else
		            {
		            	header('location:login.php?status=no');
		            }
				}
				else
				{
					header('location:login.php?login=failed');
				}
            
		
	    
?>	