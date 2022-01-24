<?php

require "includes/db_connection.php";

$conn = OpenCon();

$index = $_GET['edit'];

$sql = "SELECT * FROM product WHERE model='$index' ;";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);


               if (isset($_POST['edit'])) {
                   # code...

                   echo "clicked";
               }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5c0c9a79a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/inventory.css">
    <title>Inventory | Edit</title>

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
                 <form action="includes/edit.php" class="add_item_form" method="post">
                
                   <label for="model">Model</label>
                   <input type="text" name="model" value= '<?php echo $index ?> ' readonly required>
                   <label  for="brand">Brand</label >
                   <input required type="text" name="brand" value= '<?php echo $row['brand'] ?> '>
                   <label for="description">Description</label>
                   <input required type="text" name="description" value= '<?php echo $row['description'] ?> '>
                   <label for="price" >Price</label>
                   <input required type="text" name="price" value= '<?php echo $row['price'] ?> '>
                   <label for="quantity">Quantity</label>
                   <input required type="text" name="quantity" value= '<?php echo $row['quantity'] ?> '>
                    
                   <button id ="add" type="submit" name="edit" ><i class="fas fa-pen"></i>Update</button>
                 </form>
                              
            </div>
</body>
</html>