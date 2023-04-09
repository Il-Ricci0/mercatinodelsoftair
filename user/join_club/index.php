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
        <a class="btn btn-outline-primary rounded-end-0 ms-1" role="button" href="/mercatinodelsoftair/user/signup/index.php">Registrati</a>
        <a class="btn btn-outline-primary rounded-start-0 border-start-0" role="button" href="/mercatinodelsoftair/user/signin/index.php">Accedi</a>
        </div>
        ';
    } else {
        echo '
        <div class="d-flex align-items-center">
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
        <a class="btn btn-light rounded-0 d-block" href="#" role="button">I tuoi annunci</a>
        <a class="btn btn-light rounded-0 d-block" href="#" role="button">Annunci salvati</a>
        <a class="btn btn-danger rounded-top-0 border-top-0 d-block"
            href="/mercatinodelsoftair/user/be_logout/index.php" role="button" id="logout-button">Esci</a>
    </div>
</div>

<body>
    <?php
    if (!isset($_SESSION['logged_in'])) {
        echo '
        <!-- not signed-id or signed-up warning -->
        <div class="w-100 d-flex justify-content-center">
            <div class="card m-5 p-4 d-inline">
                Ooops! per unirti ad un club <a href="/mercatinodelsoftair/user/signin/index.php">accedi</a> o <a href="/mercatinodelsoftair/user/signup/index.php">registrati</a>.
            </div>
        </div>
        ';
    } else {
        echo '
        <div class="w-100 d-flex justify-content-center">
            <div class="card form-card m-5 p-4">
                <form action="/mercatinodelsoftair/user/be_join_club/index.php" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <h3>Unisciti ad un Club</h3>
                            <input type="text" name="name" id="club-name" class="form-control my-2"
                                placeholder="nome club" required>
                            <input type="password" name="password" id="club-password" class="form-control my-2"
                                placeholder="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Unisciti
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