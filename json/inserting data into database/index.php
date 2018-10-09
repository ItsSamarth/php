<?php
include '../../config/db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Json data insertion into database</title>
</head>
<body>
<div class="container box">
          <h3 align="center">Import JSON File Data into Mysql Database in PHP</h3><br />
          <?php 
          		$filename = "employee_data.json";

          		$data = file_get_contents($filename);
          		$array = json_decode($data, true);   //It means Json data is converted into associative array 

          		foreach ($array as $row) {
          			$query = $con->prepare("INSERT INTO tbl_employee(name,gender,designation) values('".$row["name"]."','".$row["gender"]."','".$row["designation"]."')");
          			$query->execute();
          			$table_data = '
     			       <tr>
     					  <td>'.$row["name"].'</td>
     					  <td>'.$row["gender"].'</td>
     					  <td>'.$row["designation"].'</td>
     					 </tr>
     					      '; //Data for display on Web page
 	          		}
 	          		 echo '<h3>Imported JSON Data</h3><br />';
    				 echo '
    				  <table class="table table-bordered">
    				    <tr>
    				     <th width="45%">Name</th>
    				     <th width="10%">Gender</th>
    				     <th width="45%">Designation</th>
    				    </tr>
    				 ';
    				 echo $table_data;  
    				 echo '</table>';
    				      




        ?>
</body>
</html>