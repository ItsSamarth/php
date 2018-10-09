<?php
include '../../config/db.php';  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';   
      $emp_id= $_POST["employee_id"];
      $query=$con->prepare("SELECT * FROM tbl_employe where id =:emp_id ");
      $query->bindParam(':emp_id', $emp_id);
      $query->execute();
      // $query = "SELECT * FROM tbl_employe WHERE id = '".$_POST["employee_id"]."'";  
      // $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = $query->fetch())  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["address"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["gender"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Designation</label></td>  
                     <td width="70%">'.$row["designation"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Age</label></td>  
                     <td width="70%">'.$row["age"].' Year</td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>