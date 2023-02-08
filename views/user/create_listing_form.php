<?php
session_start();
?>
<html>

<head>
    <script type="text/javascript" src="../../vendor/bootstrap/bootstrap.js"></script>
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="../../vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../../vendor/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../../vendor/fontawesome/css/all.css">
    </link>
</head>

<nav class="navbar bg-light p-2">
    <a class="navbar-brand" href="../../index.php">
        <img src="../../resurces/logo.svg" width="150">
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
        <a class="btn btn-outline-primary rounded-end-0 ms-1" role="button" href="signup_form.php">Registrati</a>
        <a class="btn btn-outline-primary rounded-start-0 border-start-0" role="button" href="signin_form.php">Accedi</a>
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
    <div class="m-5">
        <form action="create_listing.php" method="POST" class="form-horizontal">
            <input type="text" name="user" id="user" value="<?php $_SESSION['logged_in'] ?>" hidden>
            <input type="text" name="category" id="category" value="test" hidden>
            <div class="form-group">
                <h3>Creazione Annuncio</h3>
                <div class="col-sm-6">
                    <input type="text" name="title" id="listing-title" class="form-control my-2"
                        placeholder="titolo annuncio" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="description" id="listing-description" class="form-control my-2"
                        placeholder="descrizione" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="price" id="listing-price" class="form-control my-2" placeholder="prezzo"
                        required>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Crea Annuncio
                </button>
            </div>
        </form>
    </div>
</body>
<div id="footer"></div>
<script src="..\..\templates\user_template.js"></script>

</html>