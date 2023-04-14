<html>

<head>
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/bootstrap/bootstrap.css">
</head>

<body>
    <?php
    session_start();
    include('../../db_connect.php');
    $user = $_SESSION['logged_in'];
    $current_id = htmlspecialchars($_GET["id"]);

    //procedura per evitare sql injection
    $query = "DELETE FROM listings WHERE listings.id = '".$current_id."'";
    $statement = $connect->prepare($query);
    $statement->execute();

    if ($statement)
        header("Location: /mercatinodelsoftair/user/your_listings/");
    else
        echo "<h1>Delete listing failed. contact developers for assistance.</h1>";
    ?>
</body>

</html>