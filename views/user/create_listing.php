<?php
session_start();
include('db_connect.php');
$user = $_SESSION['logged_in'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];
$state="active";
$query = "INSERT INTO listings (user, title, description, price, category)
VALUES ('$user', '$title','$description', '$price', '$category')";
$result = mysqli_query($connect, $query);
if ($result)
    header("Location: ../../index.php");
else
    echo "<h1>Listing creation failed. contact developers for assistance.</h1>";
?>