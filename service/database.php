<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "data_user";

    $db = mysqli_connect($hostname, $username, $password, $database_name);

    if($db->connect_error) {
        echo "konekasi database rusak";
        die("error!");
    }
?>