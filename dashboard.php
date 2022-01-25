<?php

  require "includes/db_connection.php";
  $conn = OpenCon();

 session_start();

  $sql = "SELECT * FROM product;";
  $sql1="SELECT MAX(price) AS maximum FROM product;";


  $result= mysqli_query($conn,$sql);
  $result1= mysqli_query($conn,$sql1);


  $row_max = mysqli_fetch_assoc($result1);  
  $maximum = $row_max['maximum'];


  $result_check = mysqli_num_rows($result);

  $result_sum =mysqli_query($conn, 'SELECT SUM(price) AS sum FROM product');
  $row_sum = mysqli_fetch_assoc($result_sum);
  $sum = $row_sum['sum'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>dashboard</title>
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
                <a href="profile.html">
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
            <div class="sub-container">
                <div class="hello">
                    <div class="hello-img">
                        <img src="img/dashboard/Factory Worker 5-01.jpg" alt="">
                    </div>
                    <div class="hello-title">
                        <h2>Welcome <span><?php echo $_SESSION['name'] ?></span> To Shop Now</h2>
                        <p>The Statistics in Our Application</p>
                    </div>
                </div>
                <div class="info-row">
                    <div class="states">
                        <div class="top-stat">
                            <div class="top-left">
                                <span>State Report</span>
                            </div>
                            <div class="top-right">
                                <img src="img/dashboard/dollar.png" alt="">
                            </div>
                        </div>
                        <div class="bottom-stat">
                            <div class="bottom-left">
                                <h2>Amount</h2>
                                <span>$<?php echo $sum ?></span>
                            </div>
                            <div class="bottom-right">
                                <h2>Most Expensive</h2>
                                <span>$<?php echo $maximum ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="box">
                        <div class="box-img">
                            <img src="img/dashboard/box.png" alt="">
                        </div>
                        <div class="box-title">
                            <span class="total" >Number of products </span>
                            <span class="num"><?php echo $result_check ?></span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
CloseCon($conn);