<?php
include('../../db_connect.php');
$email = $_POST['email'];
$username = $_POST['username'];
$password = sha1($_POST['password']);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
if (isset($_POST['telegram']) && $_POST['telegram'] != null) {
    $telegram = 't.me/' . $_POST['telegram'];
}

$query = "INSERT INTO users (email, username, password, first_name, last_name, telegram)
VALUES ('$email', '$username', '$password','$firstName', '$lastName', '$telegram')";
$result = mysqli_query($connect, $query);
if ($result)
    header("Location: /mercatinodelsoftair/");
else
    echo "<h1>Signup failed. contact developers for assistance.</h1>";
?>