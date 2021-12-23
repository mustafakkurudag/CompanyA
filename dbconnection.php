<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "companya";

    $connect = mysqli_connect($db_server, $db_username, $db_password, $db_name);

    if (!$connect) {
        die("Database connection error: " . mysqli_connect_error());
    }
?>