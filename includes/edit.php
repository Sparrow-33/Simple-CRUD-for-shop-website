<?php

require "db_connection.php";
$conn = OpenCon();
$model =$_POST['model'];
$brand =$_POST['brand'];
$description=$_POST['description'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

        if (isset($_POST['edit'])) {
            
           $sql = "UPDATE product SET brand ='$brand' ,description='$description' ,price=$price ,quantity=$quantity WHERE model='$model'";
        
            if(mysqli_query($conn,$sql))
            {
                header("Location: ../inventory.php?message=ItemUpdate");

            }
        
        CloseCon();
        }