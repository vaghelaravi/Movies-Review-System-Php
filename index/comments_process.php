<?php
				include 'conn.php';
				session_start();
				if (isset($_SESSION['login']))
				{

							$movie_id=$_POST["movie_id"];
							$name=$_POST["name"];
							$comment=$_POST["comment"];
							$date=date("d-m-Y");
							
							$res=$conn->prepare("insert into tbl_movie_comments values(null,:movie_id, :user_name,:comment,:date)");
							$res->bindparam(':movie_id',$movie_id);
						 	$res->bindparam(':user_name',$name);
						 	$res->bindparam(':comment',$comment);
						 	$res->bindparam(':date',$date);
						 	$res->execute();
						 	header("Location:single.php?id=$movie_id");

				}
				else
				{
					header("Location:login.php");
				}

?>
														                                                