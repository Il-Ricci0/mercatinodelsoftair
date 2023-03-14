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
            <a class="btn btn-outline-primary" role="button" href="signup_form.php">Registrati</a>
            </div>
            ';
    } else {
        echo '
            <div class="d-flex align-items-center">
            <a class="btn btn-outline-secondary me-2" role="button" href="create_listing_form.php">Crea annuncio</a>
            <div class="circle" id="pfp">
            ' . $_SESSION["username"] . '
            </div>
            </div>
            ';
    }
    ?>
</nav>

<body>
    <div class="w-100 d-flex justify-content-center">
        <div class="card form-card m-5 p-4">
            <form action="signin.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <div class="mb-3">
                        <h3>Accedi</h3>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" id="email" class="form-control my-2" placeholder="email"
                            required>
                        <input type="password" name="password" id="password" class="form-control my-2"
                            placeholder="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Accedi
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
<div id="footer"></div>
<script src="..\..\templates\user_template.js"></script>

</html>