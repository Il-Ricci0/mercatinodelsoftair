<?php
session_start();
include('../../db_connect.php');
$user = $_SESSION['logged_in'];
$name = $_POST['name'];
$description = $_POST['description'];
$region = $_POST['region'];
$status = "active";

//procedura per evitare sql injection
$query = "INSERT INTO clubs (name,  description, region, creator) VALUES(?,?,?,?)";
$statement = $connect->prepare($query);
$statement->bind_param("ssss", $name, $description, $region, $user);
$statement->execute();

if ($statement)
    header("Location: /mercatinodelsoftair/index.php");
else
    echo "<h1>Listing creation failed. contact developers for assistance.</h1>";
?>