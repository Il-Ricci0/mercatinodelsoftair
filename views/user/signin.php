<?php
include('db_connect.php');
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);
if ($count == 1) {
    session_start();
    $_SESSION['logged_in'] = $email;
    $query = "SELECT username FROM users WHERE email = '$email'";
    $_SESSION['username'] = mysqli_fetch_assoc(mysqli_query($connect, $query))['username'];
    header("Location: ../../index.php");
} else {
    echo "<h1>Signin failed. Invalid email or password.</h1>";
}
?>