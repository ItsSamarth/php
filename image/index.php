<?php
	include_once 'db.php';
	ini_set('post_max_size', '64M'); 
	ini_set('upload_max_filesize', '64M');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" name="submit">

</form>

<h2>This is your output image</h2>
 <img src="<?php  $result = $con->query("select location from images where id = 1");
	foreach ($result as $row) {
		print $row['location'];
	} ?>">
	 
</body>
</html>


<?php


if (isset($_REQUEST['submit'])) {

$size =$_FILES['file']['size'];  //Not Required
$max_size = 2097152;
		//checking file size
		if ($size > $max_size) {
			die("FIle must be less than 2mb or 2 mb");
		}
		die();
$name = $_FILES['file']['name']; //Not Required

$type =$_FILES['file']['type'];  //Not Required
$tmp_name = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error'];

// echo $name . $size.$type.$tmp_name.$error;
echo "File Type is:".$type;

if(isset($name)) {
	if(!empty($name)) {

		





		// $extension =strtolower(substr($name, strpos($name,'.') + 1));
		// echo "your extension is:".$extension;

		//Checking MIME type
		if( !($type == 'image/gif' || $type == 'image/jpeg' || $type ==  'image/png' || $type == 'image/bmp' || $type == 'image/ico' ||
				$type =='image/svg' || $type == 'image/tiff' || $type =='image/tif' || $type == 'image/jpg')) {

				die("File Format is not supported ");

		} 

		
		
		$location = 'uploads/';
		$file_location = $location.$name;
		if (move_uploaded_file($tmp_name,$file_location )) {
			echo "uploaded";
			
			// Image path entry to the database
			$query = $con->prepare("select * from images");
				$query->execute();

				$result = $query->fetchAll();
				if(empty($result)) {
					//Insert into the database
					$query_insert = $con->prepare("INSERT INTO images VALUES ('',:path)");
					$query_insert->bindParam(':path',$file_location);
					$query_insert->execute();
				}

				else{
					$query_update = $con->prepare("UPDATE images SET location =:location where id=1");
					$query_update->bindParam(':location',$file_location);
					$query_update->execute();
				}


			// $query = $con->prepare("INSERT INTO images values('',:path)");
			// 	$query->bindParam(':path',$location.$name);
			// 	$query->execute();


		}

		else {
			echo "There is some error while uploading your image";
		}
	}

	else {
		echo "Please choose a file";
	}
}
}
?>



