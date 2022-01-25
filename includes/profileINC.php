<?php

require "db_connection.php";
$conn = OpenCon();
$id =$_POST['id'];
$name =$_POST['name'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$address = $_POST['address'];

        if (isset($_POST['id'])) {
            
           $sql = "UPDATE employee SET name='$name' ,email='$mail' ,phone=$phone, address = '$address' WHERE UserID='$id'";
        
            if(mysqli_query($conn,$sql))
            {
                echo "access";
                header("Location: ../profile.php?message=profileUpdate");

            }
        
        // CloseCon();
        }