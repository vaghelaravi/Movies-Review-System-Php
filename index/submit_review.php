<?php
	include 'conn.php';
    session_start();

	$movie_id = $_POST["movie_id"];
    $user_name = $_SESSION['login'];
    $your_rating = $_POST["your_rating"];
    /*echo "".$user_name;
    echo "".$movie_id;
    echo "".$your_rating;
    */
    $res=$conn->prepare("insert into tbl_rating values(null,:movie_id, :user_name,:rating)");
    $res->bindparam(':movie_id',$movie_id);
    $res->bindparam(':user_name',$user_name);
    $res->bindparam(':rating',$your_rating);
    $res->execute();
    header("location:single.php?id=$movie_id review=sucess");
    
    
?>