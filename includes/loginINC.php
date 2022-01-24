<?php
   if(isset($_POST['signIn']))
   {
	require 'db_connection.php';
    $conn = OpenCon();

    $mail = $_POST['email'];
    $pwd = $_POST['pwd'];

            if (empty($mail) || empty($pwd)) {
                header("Location: ../index.php?error=emptyfields");
                exit();
            }
            else{

                $sql = "SELECT * FROM employee WHERE email = ?;";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.php?error=sqlerror");
                    exit();
                }else{
                      mysqli_stmt_bind_param($stmt,"s",$mail);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                    //   $row = mysqli_num_rows($result);
                      if ($row = mysqli_fetch_assoc($result)) {
                         
                        //    $checkpwd = password_verify($pwd, $row['pwd']);

                           if (!password_verify($pwd, $row['pwd'])) {

                            session_start();
                            $_SESSION['uID'] = $row['UserID'];
                            $_SESSION['name'] = $row['name'];

                            header("Location: ../dashboard.php?login=success");


                           }else {
                
                                 header("Location: ../index.php?error=wrongpasswrd  $pwd;");

                                 
                           }

                      }else {
                        header("Location: ../index.php?error=nosuchuser");
                        
                      }
                }

            }


   }
   else {
       header("Location: ../index.php");
       exit();
   }
   
   
CloseCon();
