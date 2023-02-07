<?php
include('db_connect.php');
$id=null;
$user = $_POST['user'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];
$state="active";

$query = "INSERT INTO listings (id, user, title, description, price, category, state)
VALUES ('$id', '$user', '$title','$description', '$price', '$category', '$state')";
$result = mysqli_query($connect, $query);
if ($result)
    header("Location: ../../index.php");
else
    echo "<h1>Listing creation failed. contact developers for assistance.</h1>";
?>