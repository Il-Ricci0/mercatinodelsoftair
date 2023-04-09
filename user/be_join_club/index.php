<html>

<head>
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/bootstrap/bootstrap.css">
</head>

<body>
<?php
session_start();
include('../../db_connect.php');
$user = $_SESSION['logged_in'];
$name = $_POST['name'];
$password = $_POST['password'];
$status = "active";


$query = "SELECT * FROM partecipation WHERE user = '$user' AND club = '$name'";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);

if ($count != 1) {

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
    }else {
        echo '
    <div class="alert alert-danger w-25 mt-5 ms-5" role="alert">
        Controlla le credenziali inserite!
    </div>';
    }
}else {
    echo '
<div class="alert alert-danger w-25 mt-5 ms-5" role="alert">
    Fai già parte di questo club!
</div>';
}
?>
</body>

</html>