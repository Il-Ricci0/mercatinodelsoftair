<?php
session_start();
include('../../db_connect.php');
$listing = $_GET['listing'];
$user = $_SESSION['email'];
$action = $_GET['action'];

if ($action == "favourite") {
    $query = "INSERT INTO favourites (user, listing) VALUES(?,?)";
} else {
    $query = "DELETE FROM favourites WHERE user=? AND listing=?";
}

$statement = $connect->prepare($query);
$statement->bind_param("si", $user, $listing);
$statement->execute();

if ($statement)
    if (isset($_SESSION['previousURL'])) {
        header("Location: " . $_SESSION['previousURL']);
    } else {
        header("Location: /mercatinodelsoftair/index.php");
    }
?>