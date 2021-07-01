
<?php
	
	include 'conn.php';
			$name=$_POST["name"];
			$email=$_POST["email"];
			$mobile=$_POST["mobile"];
			$msg=$_POST["msg"];
	
			$res=$conn->prepare("insert into user_contact values(null,:name, :email, :mobile, :msg)");
			$res->bindparam(':name',$name);
		 	$res->bindparam(':email',$email);
		 	$res->bindparam(':mobile',$mobile);
		 	$res->bindparam(':msg',$msg);

			$res->execute();
		 	header("Location:index.php");

	    
?>	