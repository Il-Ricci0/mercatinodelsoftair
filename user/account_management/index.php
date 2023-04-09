<?php
session_start();
?>

<html>

<head>
    <script type="text/javascript" src="/mercatinodelsoftair/index.js"></script>
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
<?php

echo'
    <div class="w-100 d-flex justify-content-center">
        <div class="card form-card m-5 p-4">
            <form action="/mercatinodelsoftair/user/be_account_management/index.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <div class="mb-3">
                        <h3>Impostazioni Account</h3>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="firstName" id="firstName" class="form-control my-2" value="' . $_SESSION["first_name"] . '"
                            required>
                        <input type="text" name="lastName" id="lastName" class="form-control my-2" value="' . $_SESSION["last_name"] . '"
                            required>
                        <input type="text" name="username" id="username" class="form-control my-2"
                            value="' . $_SESSION["username"] . '" required>
                        <input type="text" name="telegram" id="telegram" class="form-control my-2"
                        value="' . $_SESSION["telegram"] . '" required>
                        <input type="password" name="password" id="password" class="form-control my-2"
                            placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Salva Modifiche
                    </button>
                </div>
            </form>
        </div>
    </div>'
?>
</body>
<div id="footer"></div>
<script src="/mercatinodelsoftair/templates/user_template.js"></script>

</html>