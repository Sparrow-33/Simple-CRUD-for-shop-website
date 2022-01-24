<?php

require "db_connection.php";

$conn = OpenCon();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5c0c9a79a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/inventory.css">
    <title>Inventory | Edit</title>
</head>
<body >
<div class="add_item">
                 <form action="includes/add.php" class="add_item_form" method="post">
                 
                   <label for="model">Model</label>
                   <input type="text" name="model" required>
                   <label  for="brand">Brand</label >
                   <input required type="text" name="brand">
                   <label for="description">Description</label>
                   <input required type="text" name="description">
                   <label for="price" >Price</label>
                   <input required type="text" name="price">
                   <label for="quantity">Quantity</label>
                   <input required type="text" name="quantity">
                    
                   <button id ="add" type="submit" name="add" ><i class="fas fa-pen"></i>Update</button>
                 </form>
                              
            </div>
</body>
</html>