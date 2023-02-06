<?php
    $host = "localhost";
    $user = "root";
    $password = '';
    $db_name = "mercatinodelsoftair";
    $connect = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_error()) {
        die("Error while connecting to ".$host." database: ". mysqli_connect_error());
    }
?>