<?php
session_start();

include('../../db_connect.php');

if (isset($_GET['ban'])) {
    $email = $_GET['ban'];
    $status = 'banned';
} else if (isset($_GET['unban'])) {
    $email = $_GET['unban'];
    $status = 'active';
}

$query = 'UPDATE users  SET status=? WHERE email=?';
$statement = $connect->prepare($query);
$statement->bind_param('ss', $status, $email);
$statement->execute();

header("Location: /mercatinodelsoftair/admin/");
?>