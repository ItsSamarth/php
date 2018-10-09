<?php
include '../config/db.php';

if (isset($_POST['user_name'])) {
	$username = $_POST['user_name'];
	$flag = true;
	$query=$con->prepare("SELECT * FROM tbl_employee");
	$query->execute();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		if ($row['name'] == $username) {
			$flag = false;
		}		
	}

	if ($flag == false) {
			echo "<span class='text-danger' style='color:red'>Username Not Avaliable</span>";
		}
		else {
			echo "<span class='text-success' style='color:green'>Username Avaliable </span>";
		}
}


?>