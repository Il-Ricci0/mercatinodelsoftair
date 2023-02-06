<?php
include('db_connect.php');
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);
if ($count == 1) {
    header("Location: ../../index.html");
} else {
    echo "<h1>Signin failed. Invalid email or password.</h1>";
}
?>