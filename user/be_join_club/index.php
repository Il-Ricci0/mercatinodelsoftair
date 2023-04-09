<?php
session_start();
include('../../db_connect.php');
$user = $_SESSION['logged_in'];
$name = $_POST['name'];
$password = $_POST['password'];
$status = "active";


$query = "SELECT * FROM clubs WHERE name = '$name' AND password = '$password'";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);

if ($count == 1) {
    //procedura per evitare sql injection
    $query = "INSERT INTO partecipation (user, club) VALUES(?,?)";
    $statement = $connect->prepare($query);
    $statement->bind_param("ss", $user, $name);
    $statement->execute();

    if ($statement)
        header("Location: /mercatinodelsoftair/index.php");
    else
        echo "<h1>Joining to club failed. contact developers for assistance.</h1>";
}
?>