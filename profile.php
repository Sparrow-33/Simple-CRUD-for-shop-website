<?php
  require "includes/db_connection.php";



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
                <a href="profile.html">
                    <img src="img/dashboard/profile.png" alt="">
                </a>
                <div class="side-btn">
                    <a href="profile.html">Profile</a>
                </div>
            </div>
            <div class="column">
                <a href="dashboard.html">
                    <img src="img/dashboard/Group 16.png" alt="">
                </a>
                <div class="side-btn">
                    <a href="dashboard.html">Dashboard</a>
                </div>
            </div>
            <div class="column">
                <a href="inventory.html">
                    <img src="img/dashboard/box.png" alt="">
                </a>
                <div class="side-btn">
                    <a href="inventory.html">Inventory</a>
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
                            <li><a href="profile.html">Profile</a></li>
                        </div>
                        <div class="sub-col">
                            <img src="img/dashboard/logout.png" alt="">
                            <li><a href="#">Log Out</a></li>
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
                            <h2>William Hawkins</h2>
                            <a href="#">
                                <i class="fas fa-pen"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="cas">
                        <div class="email">
                            <span class="tit">Full Name</span>
                            <span>William Hawkins</span>
                        </div>
                    </div>
                    <div class="cas">
                        <div class="email">
                            <span class="tit">Email Address</span>
                            <span>WilliamHawkins@email.com</span>
                        </div>
                    </div>
                    <div class="cas">
                        <div class="email">
                            <span class="tit">Phone Number</span>
                            <span>+1 202 555 0106</span>
                        </div>
                    </div>
                    <div class="cas">
                        <div class="email">
                            <span class="tit">Address</span>
                            <span>310 Brooklyn St Arenzville, Illinois(IL), 62611</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>