<?php
session_start();
?>

<html>

<head>
    <script type="text/javascript" src="/mercatinodelsoftair/vendor/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="/mercatinodelsoftair/index.js"></script>
    <link rel="stylesheet" href="index.css">
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

<div id="user-menu" hidden>
    <div>
        <a class="btn btn-light rounded-bottom-0 border-bottom-0 d-block" role="button"
            href="/mercatinodelsoftair/user/account_management/index.php">Impostazioni</a>
        <a class="btn btn-light rounded-0 d-block" href="/mercatinodelsoftair/user/your_listings/index.php"
            role="button">I tuoi
            annunci</a>
        <a class="btn btn-light rounded-0 d-block" href="#" role="button">Annunci salvati</a>
        <a class="btn btn-danger rounded-top-0 border-top-0 d-block"
            href="/mercatinodelsoftair/user/be_logout/index.php" role="button" id="logout-button">Esci</a>
    </div>
</div>

<body>
    <div class="container">
        <div class="row">
            <?php
            $current_id = htmlspecialchars($_GET["id"]);
            include('../../db_connect.php');
            $query = 'SELECT id, user, title, description, price, category FROM listings WHERE status="active" AND id=' . $current_id;

            $statement = $connect->prepare($query);
            $statement->execute();
            $statement->store_result();
            $statement->bind_result($id, $user, $title, $description, $price, $category);
            $statement->fetch();

            $query = 'SELECT telegram FROM users WHERE email=?';
            $statement = $connect->prepare($query);
            $statement->bind_param("s", $user);
            $statement->execute();
            $statement->bind_result($telegram);
            $statement->fetch();


            echo '
            <div class="col-9">
                <div class="card m-3 rounded-4 listing-card">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 d-flex align-items-start justify-content-start listing-image-box">
                            <div class="card rounded-3 p-1 listing-image">
                                <img src="https://mediacore.kyuubi.it/ilsemaforo/media/img/2020/7/17/159156-large-hk416-a5-v2-ral8000-cqb-full-metal-tan.jpg"
                                    class="img-fluid" alt="...">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 p-0 d-flex align-items-start justify-content-center">
                            <div class="card-body p-0">
                                <div class="listing-content">
                                    <h2 class="card-title">' . $title . '</h2>
                                    <p class="card-text">' . $description . '</p>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 d-flex">
                                        <h5 class="me-2">prezzo:</h5>
                                        <p class="card-text text-muted">' . $price . '$' . '</p>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end pe-5">
                ';
            if (isset($telegram) && $telegram != null) {
                echo '
                    <a class="btn btn-primary" role="button" href="https://' . $telegram . '">contatta<i class="ms-2 fa-brands fa-telegram fa-xl"></i></a>
                    ';
            } else {
                echo '
                    <a class="btn btn-primary disabled" role="button" title="ciao">nessun contatto :(<i class="ms-2 fa-brands fa-telegram fa-xl"></i></a>
                    ';
            }
            echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
            ?>
            <div class="col-3 bg-secondary">
                <div class="sticky-top">
                    ADVERTISEMENT.
                </div>
            </div>
        </div>
    </div>
</body>
<div id="footer"></div>
<script src="/mercatinodelsoftair/templates/user_template.js"></script>

</html>