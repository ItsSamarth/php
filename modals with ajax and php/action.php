<?php 
session_start();
include '../config/db.php';


if(isset($_POST['ratings'])) {
	

	$rating = $_POST['ratings'];
	$comment = $_POST['comment'];
	// $query = $con->prepare("INSERT INTO worklog(LeaderRating , LeaderComment) VALUES(:rate, :leader_comment) where name = 'sam' ");
	$query =$con->prepare("UPDATE worklog SET LeaderRating =:rate , LeaderComment =:comment WHERE id=1");
	$query -> bindParam(':rate' ,$rating );
	$query -> bindParam(':comment', $comment);

	$res = $query->execute();



	echo "Your rating is posted here ";

	echo "<script> console.log(";

	echo $_POST['ratings'];

		echo ") </script>";
}



if(isset($_POST['action'])) {
	unset($_SESSION['username']);
}


 ?>