<?php
require "db_connection.php";

$conn = OpenCon();


if (isset($_GET['edit'])) {
    # code...
    echo "success";

    echo $_GET['edit'];

}

