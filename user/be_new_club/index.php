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
    $description = $_POST['description'];
    $region = $_POST['region'];
    $password = $_POST['password'];
    $status = "active";


    $query = "SELECT * FROM clubs WHERE name = '$name'";
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);

    if ($count != 1) {
        //procedura per evitare sql injection
        $query = "INSERT INTO clubs (name,  description, region, creator, password) VALUES(?,?,?,?,?)";
        $statement = $connect->prepare($query);
        $statement->bind_param("sssss", $name, $description, $region, $user, $password);
        $statement->execute();

        if ($statement)
            header("Location: /mercatinodelsoftair/");
        else
            echo "<h1>Club creation failed. contact developers for assistance.</h1>";
    } else {
        echo '
    <div class="alert alert-danger w-25 mt-5 ms-5" role="alert">
    Club già esistente!
    </div>';
    }
    ?>
</body>

</html>