 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php

 require "db_connection.php";

 $conn = OpenCon();


 $model = $_POST['model'];
 $brand = $_POST['brand'];
 $description = $_POST['description'];
 $price = $_POST['price'];
 $quantity = $_POST['quantity'];


 $sql = "INSERT INTO product(model,brand,description,price,quantity)
         VALUES (?,?,?,?,?);";

 $stmt = mysqli_stmt_init($conn);
 
 if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php?error=sqlerror");
    exit();
 }else {
     
    mysqli_stmt_bind_param($stmt,"sssii",$model,$brand,$description,$price,$quantity);
    mysqli_stmt_execute($stmt); 

    header("Location: ../inventory.php?message=ItemAdded");
 }

CloseCon();
