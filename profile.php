<?php

  require "includes/db_connection.php";
  $conn = OpenCon();
 session_start();


  $sql = "SELECT * FROM employee ";
  $result= mysqli_query($conn,$sql);
  $result_check = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);








?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <script src="https://kit.fontawesome.com/5c0c9a79a5.js" crossorigin="anonymous"></script>
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <!-- left panel  -->
        <div class="leftSide">
            <div class="logo">
                <img class="shop" src="img/dashboard/logo.png" alt="">
                <button class="btn">
                    <img src="img/dashboard/menu.png" alt="">
                </button>
            </div>
            <hr>
            <div class="column">
                <a href="profile.php">
                    <img src="img/dashboard/profile.png" alt="">
                </a>
                <div class="side-btn">
                    <a href="profile.php">Profile</a>
                </div>
            </div>
            <div class="column">
                <a href="dashboard.php">
                    <img src="img/dashboard/Group 16.png" alt="">
                </a>
                <div class="side-btn">
                    <a href="dashboard.php">Dashboard</a>
                </div>
            </div>
            <div class="column">
                <a href="inventory.php">
                    <img src="img/dashboard/box.png" alt="">
                </a>
                <div class="side-btn">
                    <a href="inventory.php">Inventory</a>
                </div>
            </div>
        </div>
        
        <!-- ******************************************************** -->
        <!-- right panel  -->
        <div class="rightSide">
            <!-- nav bar  -->
            <div class="navbar">
                <div class="dropdown">
                    <button>
                        <img src="img/dashboard/profile.png" alt="">
                    </button>
                    <ul>
                        <div class="sub-col">
                            <img src="img/dashboard/profile.png" alt="">
                            <li><a href="profile.php">Profile</a></li>
                        </div>
                        <div class="sub-col">
                            <img src="img/dashboard/logout.png" alt="">
                            <li><a href="includes/logout.php">Log Out</a></li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="title">
                <img src="img/dashboard/profile.png" alt="">
                <span>Profile</span>
            </div>
            <div class="subcontainer">
                <div class="pics">
                    <div class="pro">
                        <img src="img/dashboard/profile.png" alt="">
                        <div class="edit">
                            <h2><?php echo $row['name']  ?></h2>
                            <a href="edit_profile.php?id=<?php echo $_SESSION['uID'] ?>">
                                <i class="fas fa-pen"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="cas">
                        <div class="email">
                            <span class="tit">Full Name</span>
                            <span><?php echo $row['name'] ?></span>
                        </div>
                    </div>
                    <div class="cas">
                        <div class="email">
                            <span class="tit">Email Address</span>
                            <span><?php echo $row['email']  ?></span>
                        </div>
                    </div>
                    <div class="cas">
                        <div class="email">
                            <span class="tit">Phone Number</span>
                            <span><?php echo $row['phone']  ?></span>
                        </div>
                    </div>
                    <div class="cas">
                        <div class="email">
                            <span class="tit">Address</span>
                            <span>3<?php echo $row['address'] ?>  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>