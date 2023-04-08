<?php
session_start();
?>

<html>

<head>
    <script type="text/javascript" src="/mercatinodelsoftair/vendor/bootstrap/bootstrap.js"></script>
    <link rel="stylesheet" href="/mercatinodelsoftair/index.css">
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/fontawesome/css/all.css">
    </link>
</head>

<nav class="navbar bg-light p-2">
    <a class="navbar-brand" href="/mercatinodelsoftair/index.php">
        <img src="/mercatinodelsoftair/resurces/logo.svg" width="150">
    </a>
    <?php
    if (!isset($_SESSION['logged_in'])) {
        echo '
        <div class="d-flex">
        <a class="btn btn-outline-secondary" role="button" href="/mercatinodelsoftair/user/create_listing/index.php">Crea annuncio</a>
        <a class="btn btn-outline-primary rounded-end-0 ms-1" role="button" href="/mercatinodelsoftair/user/signup/index.php">Registrati</a>
        <a class="btn btn-outline-primary rounded-start-0 border-start-0" role="button" href="/mercatinodelsoftair/user/signin/index.php">Accedi</a>
        </div>
        ';
    } else {
        echo '
        <div class="d-flex align-items-center">
        <a class="btn btn-outline-secondary me-2" role="button" href="/mercatinodelsoftair/user/create_listing/index.php">Crea annuncio</a>
        <div class="circle" id="pfp" onclick="expandOrCollapseUserMenu()">
        ' . $_SESSION["username"] . '
        </div>
        </div>
        ';
    }
    ?>
</nav>

<body>
<?php
    $current_id = htmlspecialchars($_GET["id"]);
    include('../../db_connect.php');
    $query = 'SELECT id, title, description, price, category FROM listings WHERE status="active" AND id=' . $current_id;

    $statement = $connect->prepare($query);
    $statement->bind_result($id, $title, $description, $price, $category);
    $statement->execute();
    $statement->fetch();

    echo'

    <div class="w-100 d-flex justify-content-center">
        <div class="col-6 d-flex align-items-start justify-content-center listing-image-box">
                <img src="https://mediacore.kyuubi.it/ilsemaforo/media/img/2020/7/17/159156-large-hk416-a5-v2-ral8000-cqb-full-metal-tan.jpg"
                    class="img-fluid" alt="...">
        </div>
    </div>

    <div class="w-100 d-flex justify-content-center">
        <h1 class="display-1">' . $title . '</h1>
    </div>

    <div class="w-100 d-flex justify-content-center">
        <h2 class="display-2">' . $price . '</h1>
    </div>

    <div class="w-100 d-flex justify-content-center">
        <h6 class="display-6">' . $description . '</h1>
    </div>'
    ?>
</body>
<div id="footer"></div>
<script src="/mercatinodelsoftair/templates/user_template.js"></script>

</html>