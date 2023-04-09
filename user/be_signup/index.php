<?php
include('../../db_connect.php');
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$telegram = 't.me/' . $_POST['telegram'];

$query = "INSERT INTO users (email, username, password, first_name, last_name, telegram)
VALUES ('$email', '$username', '$password','$firstName', '$lastName', '$telegram')";
$result = mysqli_query($connect, $query);
if ($result)
    header("Location: /mercatinodelsoftair/index.php");
else
    echo "<h1>Signup failed. contact developers for assistance.</h1>";
?>