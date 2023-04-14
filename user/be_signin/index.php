<?php
include('../../db_connect.php');
$email = $_POST['email'];
$password = sha1($_POST['password']);

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);
if ($count == 1) {
    session_start();
    $_SESSION['logged_in'] = $email;
    $query = "SELECT username, first_name, last_name FROM users WHERE email = '$email'";
    $_SESSION['username'] = mysqli_fetch_assoc(mysqli_query($connect, $query))['username'];
    $_SESSION['first_name'] = mysqli_fetch_assoc(mysqli_query($connect, $query))['first_name'];
    $_SESSION['last_name'] = mysqli_fetch_assoc(mysqli_query($connect, $query))['last_name'];
    $_SESSION['email'] = $email;
    $_SESSION['telegram'] = mysqli_fetch_assoc(mysqli_query($connect, $query))['telegram'];
    header("Location: /mercatinodelsoftair/");
} else {
    echo "<h1>Signin failed. Invalid email or password.</h1>";
}
?>