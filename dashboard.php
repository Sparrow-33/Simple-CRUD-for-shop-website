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
                <a href="#">Dashboard</a>
            </div>
            <div class="column">
                <img src="img/dashboard/box.png" alt="">
                <a href="inventory.php">Inventory</a>
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
            <!-- nav bar  -->
            <div class="navbar">
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
                            <li><a href="#">Log Out</a></li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="title">
                <img src="img/dashboard/Group 16.png" alt="">
                <span>Dashboard</span>
            </div>
            <div class="sub-container">
                <div class="father1">
                    <div class="first child1">
                        <span>Sale Overview</span>
                        <div class="cc">
                        <div class="son first-son1">
                            <div>
                                <img src="img/dashboard/sale.png" alt="">
                                <div class="sontitle">
                                    <span>Total Sale</span>
                                    <span>923</span>
                                </div>
                            </div>
                            <div>
                                <img src="img/dashboard/financial-profit.png" alt="">
                                <div class="sontitle">
                                    <span>Profit</span>
                                    <span>614</span>
                                </div>
                            </div>
                        </div>
                        <div class="son first-son2">
                            <div>
                                <img src="img/dashboard/revenue.png" alt="">
                                <div class="sontitle">
                                    <span>Revenu</span>
                                    <span>18543</span>
                                </div>
                            </div>
                            <div>
                                <img src="img/dashboard/low-price.png" alt="">
                                <div class="sontitle">
                                    <span>Cost</span>
                                    <span>13690</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="first child2">
                        <span>Purchase Overview</span>
                        <div class="cc">
                        <div class="son first-son1">
                            <div>
                                <img src="img/dashboard/trolley.png" alt="">
                                <div class="sontitle">
                                    <span>No of Purchase</span>
                                    <span>12</span>
                                </div>
                            </div>
                            <div>
                                <img src="img/dashboard/cancelled.png" alt="">
                                <div class="sontitle">
                                    <span>Cancel Order</span>
                                    <span>09</span>
                                </div>
                            </div>
                        </div>
                        <div class="son first-son2">
                            <div>
                                <img src="img/dashboard/package.png" alt="">
                                <div class="sontitle">
                                    <span>Return</span>
                                    <span>03</span>
                                </div>
                            </div>
                            <div>
                                <img src="img/dashboard/low-price.png" alt="">
                                <div class="sontitle">
                                    <span>Cost</span>
                                    <span>298</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="father2">
                    <div class="child3">
                        <div class="ch1">
                            <span>Inventory Overview</span>
                        </div>
                        <div class="ch2">
                            <img src="img/dashboard/boxes.png" alt="">
                            <div class="sontitle">
                                <span>Quantity in Hand</span>
                                <span>576</span>
                            </div>
                        </div>
                        <div class="ch2">
                            <img src="img/dashboard/parachute.png" alt="">
                            <div class="sontitle">
                                <span>Well be Received</span>
                                <span>6014</span>
                            </div>
                        </div>
                    </div>
                    <div class="child4">
                        <div class="ch1">
                            <span>No. of Users</span>
                        </div>
                        <div class="ch2">
                            <img src="img/dashboard/group.png" alt="">
                            <div class="sontitle">
                                <span>Total Customers</span>
                                <span>923</span>
                            </div>
                        </div>
                        <div class="ch2">
                            <img src="img/dashboard/delivery-courier.png" alt="">
                            <div class="sontitle">
                                <span>Total Suppliers</span>
                                <span>2840</span>
                            </div>
                        </div>
                    </div>
                    <div class="child5">
                        <div class="ch1">
                            <span>Stock Overview</span>
                        </div>
                        <div class="chi1">
                            <div class="sontitl">
                                <span>Low Stock Items</span>
                                <span>02</span>
                            </div>
                            <hr>
                            <div class="sontitl">
                                <span>Item Group</span>
                                <span>14</span>
                            </div>
                            <hr>
                            <div class="sontitl">
                                <span>No. of Items</span>
                                <span>104</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>