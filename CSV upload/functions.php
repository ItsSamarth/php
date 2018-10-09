<?php
include '../config/db.php';
 if(isset($_POST["Export"])){
             
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Id', 'Username', 'Project', 'Task', 'Status','Date','Rating' ,'LeaderRating' ,'LeaderComment'));  
      $query = $con -> prepare("SELECT * from worklog ORDER BY date DESC");
      $query->execute();
      $count =1;
      while($row = $query->fetch(PDO::FETCH_ASSOC))
                           {
                              // $date=$row['Date'];
                              // $time=date('dd/mm/yyyy',$date);
                              $data =array($count,$row['Username'],$row['Project'],$row['Task'],$row['Status'],$row['Date'], $row['Rating'],$row['LeaderRating'], $row['LeaderComment']);
                              fputcsv($output, $data);
                              $count++;
                        }

                        fclose($output);
 }  



?>