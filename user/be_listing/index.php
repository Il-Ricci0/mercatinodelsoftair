<?php
session_start();
include('/mercatinodelsoftair/db_connect.php');
$user = $_SESSION['logged_in'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];
$status = "active";

//procedura per evitare sql injection
$query = "INSERT INTO listings (user, title, description, price, category, status) VALUES(?,?,?,?,?,?)";
$statement = $connect->prepare($query);
$statement->bind_param("sssiss", $user, $title, $description, $price, $category, $status);
$statement->execute();

if ($statement)
    header("Location: /mercatinodelsoftair/index.php");
else
    echo "<h1>Listing creation failed. contact developers for assistance.</h1>";
?>