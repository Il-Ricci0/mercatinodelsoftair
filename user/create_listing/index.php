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
    <form class="form-inline d-flex">
        <input class="form-control rounded-end-0" type="search" placeholder="cerca annuncio">
        <button class="btn btn-primary rounded-start-0" type="submit"><i
                class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
    </form>
    <?php
    if (!isset($_SESSION['logged_in'])) {
        echo '
        <div class="d-flex">
        <a class="btn btn-outline-primary rounded-end-0 ms-1" role="button" href="/mercatinodelsoftair/user/signup/index.php">Registrati</a>
        <a class="btn btn-outline-primary rounded-start-0 border-start-0" role="button" href="/mercatinodelsoftair/user/signin/index.php">Accedi</a>
        </div>
        ';
    } else {
        echo '
        <div class="d-flex align-items-center">
        <div class="circle" id="pfp">
        ' . $_SESSION["username"] . '
        </div>
        </div>
        ';
    }
    ?>
</nav>

<body>
    <?php
    if (!isset($_SESSION['logged_in'])) {
        echo '
        <!-- not signed-id or signed-up warning -->
        <div class="w-100 d-flex justify-content-center">
            <div class="card m-5 p-4 d-inline">
                Ooops! per creare un annuncio <a href="/mercatinodelsoftair/user/signin/index.php">accedi</a> o <a href=href="/mercatinodelsoftair/user/signup/index.php">registrati</a>.
            </div>
        </div>
        ';
    } else {
        echo '
        <!-- create listing form -->
        <div class="w-100 d-flex justify-content-center">
            <div class="card form-card m-5 p-4">
                <form action="/mercatinodelsoftair/user/be_listing/index.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <input type="text" name="user" id="user" value="<?php $_SESSION[' . "logged_in" . '] ?>" hidden>
                        <input type="text" name="category" id="category" value="test" hidden>
                        <div class="form-group">
                            <h3>Creazione Annuncio</h3>
                            <input type="text" name="title" id="listing-title" class="form-control my-2"
                                placeholder="titolo annuncio" required>
                            <input type="text" name="description" id="listing-description" class="form-control my-2"
                                placeholder="descrizione" required>
                            <input type="text" name="price" id="listing-price" class="form-control my-2"
                                placeholder="prezzo" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Crea Annuncio
                        </button>
                    </div>
                </form>
            </div>
        </div>
        ';
    }
    ?>
</body>
<div id="footer"></div>
<script src="/mercatinodelsoftair/templates/user_template.js"></script>
</html>
