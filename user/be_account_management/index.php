<?php
session_start();
?>

<?php
include('../../db_connect.php');
$username = $_POST['username'];
$password = sha1($_POST['password'] );
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
if (isset($_POST['telegram']) && $telegram != null) {
    $telegram = 't.me/' . $_POST['telegram'];
}

$query = "SELECT * FROM users WHERE email = '" . $_SESSION["email"] . "' AND password = '$password'";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);

$query = "UPDATE users SET username = '$username', first_name = '$firstName', last_name = '$lastName', telegram = '$telegram' WHERE email ='" . $_SESSION["email"] . "'";
$result = mysqli_query($connect, $query);

if ($count == 1) {
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["first_name"] = $_POST['firstName'];
    $_SESSION["last_name"] = $_POST['lastName'];
    $_SESSION["telegram"] = $_POST['telegram'];
    if ($result)
        header("Location: /mercatinodelsoftair/");
    else
        echo "<h1>Modifiche non salvate.</h1>";
} else
    echo "<h1>Password sbagliata</h1>";

?>