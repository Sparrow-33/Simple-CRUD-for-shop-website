<?php
   include "includes/db_connection.php";
   $conn = OpenCon();



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5c0c9a79a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/inventory.css">
    <title>Inventory</title>
</head>
<body>
    <div class="container">
        <!-- left panel  -->
        <div class="leftSide">
            <div class="logo">
                <img class="shop" src="img/dashboard/logo.png" alt="">
                <!-- <button class="btn">
                    <img src="img/dashboard/menu.png" alt="">
                </button> -->
            </div>
            <hr>
            <div class="column">
                <img src="img/dashboard/profile.png" alt="">
                <a href="profile.php">Profile</a>
            </div>
            <div class="column">
                <img src="img/dashboard/Group 16.png" alt="">
                <a href="dashboard.php">Dashboard</a>
            </div>
            <div class="column">
                <img src="img/dashboard/box.png" alt="">
                <a href="#">Inventory</a>
            </div>
            <div class="column">
                <img src="img/dashboard/discount.png" alt="">
                <a href="#">Sales</a>
            </div>
            <div class="column">
                <img src="img/dashboard/invoice.png" alt="">
                <a href="#">Bill</a>
            </div>
            <div class="column">
                <img src="img/dashboard/delivery-courier.png" alt="">
                <a href="#">Customer</a>
            </div>
        </div>
        
        <!-- ******************************************************** -->

        <!-- right panel  -->
        <div class="rightSide">
            <div class="navbar">
                <header>
                    <input class="search" type="text"  placeholder="Search for products...">
                    <!-- <img src="img/dashboard/search.png" alt="" class="search"> -->
                    <i class="fas fa-search"></i>
                 </header>
                 <div class="notif">
                    <img src="img/dashboard/bell.png" alt="">
                    <div class="dropdown">
                        <button>
                            <img src="img/dashboard/utilisateur.png" alt="">
                        </button>
                        <ul>
                            <div class="sub-col">
                                <img src="img/dashboard/profile.png" alt="">
                                <li><a href="#">Profile</a></li>
                            </div>
                            <div class="sub-col">
                                <img src="img/dashboard/cogwheel.png" alt="">
                                <li><a href="#">Setting</a></li>
                            </div>
                            <div class="sub-col">
                                <img src="img/dashboard/logout.png" alt="">
                                <li><a href="includes/logout.php">Log Out</a></li>
                            </div>
                        </ul>
                    </div>
                 </div>
                
            </div>
            <div class="title">
                <div class="sub">
                    <img src="img/dashboard/box.png" alt="">
                    <span>Inventory Management</span>
                </div>
                <div class="sub">
                    <button id="add"><i class="fas fa-plus"></i> Add Item</button>
                </div>
            </div>

            <div class="add_item">
                <i class="fas fa-times exit"></i>
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
                    
                   <button type="submit" name="add" ><i class="fas fa-plus"></i> ADD</button>
                 </form>
                              
            </div>

            <!-- < <div class="edit_item ">
                 
                <?php
                    //    require "includes/db_connection.php";
                    //    $conn = OpenCon();
                    //    $index = $_GET['edit'];
                    //    $sql = "SELECT FROM product WHERE model = '$index';";
                    //    $result = mysqli_query($conn,$sql);


                ?>
                 

                 <form action="" class="add_item_form " method="post">

                   <label for="model">Model</label>
                   <input type="text" name="model" required >
                   <label  for="brand">Brand</label >
                   <input required type="text" name="brand">
                   <label for="description">Description</label>
                   <input required type="text" name="description">
                   <label for="price" >Price</label>
                   <input required type="text" name="price">
                   <label for="quantity">Quantity</label>
                   <input required type="text" name="quantity">
                    
                   <button type="submit" name="edit" ><i class="fas fa-pen"></i> update</button>
                 </form>
                              
            </div>
 -->




 



            <div class="table">
                <table>
                    <tr>
                        <th>Model</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Price in $</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    

                    <?php

                        $sql = "SELECT * FROM product;";
                        $result = mysqli_query($conn,$sql);
                        $result_check = mysqli_num_rows($result);

                        
                            while ($row = mysqli_fetch_assoc($result) ): ?> 
                                

                                <tr>
                                <td><?php echo $row['model'] ?></td>
                                <td><?php echo $row['brand'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['quantity'] ?></td>
                                <td>
                                    <a class="action" href ='update.php?edit=<?php echo $row['model']; ?>'>
                                      <img src="img/dashboard/pencil.png" alt="">
                                    </a>

                                    <a class="action"  href ='includes/delete.php?delete=<?php echo $row['model']; ?>'>
                                      <img src="img/dashboard/trash.png" alt="">
                                    </a>

                                </td>
                            </tr>
                            
                        
                       <?php endwhile;
                       CloseCon($conn);
                       ?>

                       
                    

                </table>
            </div>
        </div>
 
        <script>
            let addbttn = document.querySelector("#add");
            let add = document.querySelector(".add_item");
            let out = document.querySelector(".exit")

            addbttn.addEventListener('click', function () {
            add.style.display="flex";
             });

             out.addEventListener('click', function () {
            add.style.display="none";
             });

            
        </script>
</body>
</html>