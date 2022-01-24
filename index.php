<?php
   session_start();
?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="img/dashboard/logo.png" alt="">
            </div>
            <div class="login">
                <a href="login.php"><img src="img/dashboard/log-in.png" alt=""></a>
            </div>
        </div>
        <div class="subcont">
            <div class="left">
                <span class="title">Inventory <br>Management <br>System</span>
                <span class="subtitle">Stay Productive and Work Remotely</span>
                <form method="post" action="login.php" >
                <button class="signin" name="signIn">Sign in</button>
                </form>
            </div>
            <div class="right">
                <img src="img/dashboard/worker.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>