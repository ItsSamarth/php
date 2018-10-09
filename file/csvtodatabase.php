<?php
ini_set('max_execution_time', 300000000);
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "db/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="files">
	<input type="submit" name="submit">
</form>
</body>
</html>
<?php
	if(isset($_POST['submit']))
  {
    $data = $_FILES['files']['name'];
    
  // echo $_FILES['files']['type'];
   
   
    $allowed_ext = array("csv");  

    
        if($_FILES['files']['type'] == "text/csv" || $_FILES['files']['type'] == "application/vnd.ms-excel")
        {
        $file_data = fopen($_FILES["files"]["tmp_name"], "r");
        fgetcsv($file_data);

        while ($row = fgetcsv($file_data)) {
            $name = $row[0];
            $email = $row[1];
            $rfname = $row[2];
            $rlname = $row[3];
            $company = $row[4];
            $designation = $row[5];
            $pno = $row[6];
            $remail = $row[7];            
            $optional = $row[8];
            $date = "2017-10-26";
			$percentage = 100;
			$coupon = uniqid();
			$status = "Not Used";
			$usages = "Self Generated";
			$datetime = date("Y-m-d h:i:sa");
			$generated = "self";  
            $query11 = $con->prepare("insert into coupon_code values('',:coupon,:percentage,:status,:date,:usages,:datetime,:generated_id)");
			$query11->bindParam(':coupon',$coupon);
			$query11->bindParam(':percentage',$percentage);
			$query11->bindParam(':status',$status);
			$query11->bindParam(':date',$date);
			$query11->bindParam(':usages',$usages);
			$query11->bindParam(':datetime',$datetime);
			$query11->bindParam(':generated_id',$generated);
			$query11->execute();

       $status = "Not Approved";
       	
        $query = $con->prepare("insert into refer_customer values('',:name,:email,:rfname,:rlname,:company,:designation,:pno,:remail,:optional,:coupon,:status)");
        $query->bindParam(':name',$name);
        $query->bindParam(':email',$email);
        $query->bindParam(':rfname',$rfname);
        $query->bindParam(':rlname',$rlname);
        $query->bindParam(':company',$company);
        $query->bindParam(':designation',$designation);
        $query->bindParam(':pno',$pno);
        $query->bindParam(':remail',$remail);
        $query->bindParam(':optional',$optional);
        $query->bindParam(':coupon',$coupon);
        $query->bindParam(':status',$status);
        $res = $query->execute();


        }
        
        if($res)
            {
               // echo "<h4>Your file has been uploaded Sucessfully</h4>";
              echo "<script>";
              echo "alert('done');";
              echo "</script>";
              
            }
            else
            {
              echo "<script>";
              echo "alert('failed');";
              echo "</script>";
            }
        }
        else{
           echo "<script>
           			alert('only csv');
					</script>";
        }
        }



?>