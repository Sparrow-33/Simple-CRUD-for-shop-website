<?php

require "includes/db_connection.php";
$conn = OpenCon();
session_start();

$index = $_GET['id'];

$sql = "SELECT * FROM employee WHERE UserID=$index";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5c0c9a79a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/inventory.css">
    <title>Profile | Edit</title>

    <style>
        body
        {
            display:grid;
            place-items:center;
            height:100vh;
        }
      .edit_item
{
    position: absolute;
    display: flex;
    justify-content: center;
    z-index: 9999;
    margin: 20px auto;
    background: #F7F7F9;
    height: fit-content;
    width: 400px;
    padding: 1em 2em;
    
    box-shadow: 0 0 10px black;
}


    </style>
</head>
<body >
    
<div class="edit_item">
                 <form action="includes/profileINC.php" class="add_item_form" method="post">
                
                   <label for="model">User ID</label>
                   <input type="text" name="id" value= '<?php echo $index ?> ' readonly required>
                   <label  for="brand">Full Name</label >
                   <input required type="text" name="name" value= '<?php echo $row['name'] ?> '>
                   <label for="description">Email</label>
                   <input required type="text" name="mail" value= '<?php echo $row['email'] ?> '>
                   <label for="price" >Phone</label>
                   <input required type="text" name="phone" value= '<?php echo $row['phone'] ?> '>
                   <label for="price" >Adress</label>
                   <input required type="text" name="address" value= '<?php echo $row['address'] ?> '>
                    
                   <button id ="add" type="submit" name="edit" ><i class="fas fa-pen"></i>Update</button>
                 </form>
                              
            </div>
</body>
</html>