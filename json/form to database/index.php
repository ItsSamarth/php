<?php
//Taking Json data from the html form and insert into database
include '../../config/db.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Form Data</title>
 </head>
 <body>
 <form method="POST"  action="">
<label>Username</label>
<input type="text" name="username">
<br>
<label> Password</label>
<input type="text" name="password">
<br>
<input type="submit" name='submit' value="Register">
 </form>


 <!-- retrieving json data -->
 <?php
 $query_fetch = $con->prepare("SELECT * FROM json_insert");
 $query_fetch->execute();
  while ($row = $query_fetch->fetch()){
 	print_r($row['userdata']); 	
  }
 
 ?>
 </body>
 </html>

<?php
$key="slugger";
if (isset($_REQUEST['submit'])) {
	echo "<script>console.log('It works');</script>";
	print_r("It works");

	echo md5($_POST['username']);

	// $arr = array(
	// 	'username' => $_POST['username'],
	// 	'password'=>  AES_ENCRYPT($_POST['password'],$encryption_key)
	// );

	// $json_data = json_encode($arr);

	// $query = $con->prepare('INSERT INTO json_insert(id,userdata) values ("",:data)');
	// $query->bindParam(':data',$json_data);
	// $query->execute();

}


?>