<?php
include '../config/db.php';

 $query=$con->prepare("select name, designation from tbl_employe;");
      $query->execute();
      $rows= array();
      while ($r = $query->fetch(PDO::FETCH_ASSOC)) {
          $rows[] = $r;
      }

      //echo result as json
      echo json_encode($rows);
 ?>