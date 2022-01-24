<?php

  require "db_connection.php";
  $con = OpenCon();
  if (isset($_GET['delete'])) {
      
  
    $model = $_GET['delete'];
    
    $stmt ="DELETE FROM product WHERE model='$model'";

    if (mysqli_query($con,$stmt)) {
        # code...
        header("Location: ../inventory.php?message=itemDeleted");
    }else {
        # code...
        echo "failed";
        echo $model;
    }
    
         
  }