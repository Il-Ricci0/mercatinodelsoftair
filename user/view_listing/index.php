<html>

<head>
    <script type="text/javascript" src="../../vendor/bootstrap/bootstrap.js"></script>
    <!-- router performs routing throught the pages -->
    <script type="text/javascript" src="router.js"></script>
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
            <a class="btn btn-outline-primary" role="button" onclick="route(' . "'/signup'" . ')">Registrati</a>
            </div>
            ';
    } else {
        echo '
            <div class="d-flex align-items-center">
            <a class="btn btn-outline-secondary me-2" role="button" onclick="route(' . "'/listing'" . ')">Crea annuncio</a>
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
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://mediacore.kyuubi.it/ilsemaforo/media/img/2020/7/17/159156-large-hk416-a5-v2-ral8000-cqb-full-metal-tan.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="https://mediacore.kyuubi.it/ilsemaforo/media/img/2020/7/17/159156-large-hk416-a5-v2-ral8000-cqb-full-metal-tan.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="https://mediacore.kyuubi.it/ilsemaforo/media/img/2020/7/17/159156-large-hk416-a5-v2-ral8000-cqb-full-metal-tan.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div>
            <text>TITOLO</text>
        </div>

        <div>
            <text>PREZZO</text>
        </div>

        <div>
            <text>Descrizione</text>
        </div>
    </div>
</body>
<div id="footer"></div>
<script src="..\..\templates\user_template.js"></script>

</html>