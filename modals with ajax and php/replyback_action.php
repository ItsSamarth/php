<?php 
session_start();
include '../config/db.php';

// Replying back to leaders comments
if(isset($_POST['reply'])) {
	$reply = $_POST['reply'];
	 $query = $con->prepare("INSERT INTO replyback(id,name,reply) values('' , :uname, :reply)");
        		  $query->bindParam(':uname',$_SESSION['name']);
        		  $query->bindParam(':reply',$reply);
        		  $query->execute();
}

 ?>