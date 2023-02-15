<?php
session_start();
?>
<html>

<head>
    <script type="text/javascript" src="vendor/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css">
    </link>
</head>

<nav class="navbar bg-light p-2">
    <a class="navbar-brand" href="index.php">
        <img src="resurces/logo.svg" width="150">
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
        <a class="btn btn-outline-secondary" role="button" href="views/user/create_listing_form.php">Crea annuncio</a>
        <a class="btn btn-outline-primary rounded-end-0 ms-1" role="button" href="views/user/signup_form.php">Registrati</a>
        <a class="btn btn-outline-primary rounded-start-0 border-start-0" role="button" href="views/user/signin_form.php">Accedi</a>
        </div>
        ';
    } else {
        echo '
        <div class="d-flex align-items-center">
        <a class="btn btn-outline-secondary me-2" role="button" href="views/user/create_listing_form.php">Crea annuncio</a>
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
        <a class="btn btn-light rounded-bottom-0 border-bottom-0 d-block" href="#" role="button">Impostazioni</a>
        <a class="btn btn-light rounded-0 d-block" href="#" role="button">I tuoi annunci</a>
        <a class="btn btn-light rounded-0 d-block" href="#" role="button">Annunci salvati</a>
        <a class="btn btn-danger rounded-top-0 border-top-0 d-block" href="views/user/logout.php" role="button" id="logout-button">Esci</a>
    </div>
</div>

<body>
    <div class="container">
        <div class="row">
            <div class="col bg-secondary">
                <div class="sticky-top">
                    FILTER.
                    <div class="card m-3 rounded-4 d-flex align-items-center">
                        <div class="list-group m-3" id="categories">
                            <h5 class="text-muted">categorie:</h5>
                            <div>
                                <a class="list-group-item list-group-item-action border-bottom-0" data-bs-toggle="list"
                                    href="" id="fucili-bolt-action" onclick="expandOrCollapseCategory(this)">
                                    <div class="d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="resurces/vsr.svg" width="25px" height="25px">
                                        </div>
                                        <text>
                                            fucili bolt action
                                        </text>
                                    </div>
                                </a>
                                <div class="subcategory ms-4" name="fucili-bolt-action" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" href="">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="resurces/vsr.svg" width="25px" height="25px">
                                            </div>
                                            <text>
                                                sottocategoria
                                            </text>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href=""
                                id="fucili-elettrici" onclick="expandOrCollapseCategory(this)">
                                <div class="d-flex align-items-center">
                                    <div class="circle me-3">
                                        <img src="resurces/ak47.svg" width="25px" height="25px">
                                    </div>
                                    <text>fucili elettrici</text>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href=""
                                id="fucili-gas-scarrellanti" onclick="expandOrCollapseCategory(this)">
                                <div class="d-flex align-items-center">
                                    <div class="circle me-3">
                                        <img src="resurces/aug.svg" width="25px" height="25px">
                                    </div>
                                    <text>
                                        fucili a gas scarrellanti
                                    </text>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href=""
                                id="fucili-pump-action" onclick="expandOrCollapseCategory(this)">
                                <div class="d-flex align-items-center">
                                    <div class="circle me-3">
                                        <img src="resurces/model1897.svg" width="25px" height="25px">
                                    </div>
                                    <text>
                                        fucili pump action
                                    </text>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href=""
                                id="fucili-radio" onclick="expandOrCollapseCategory(this)">
                                <div class="d-flex align-items-center">
                                    <div class="circle me-3">
                                        <img src="resurces/radio.svg" width="25px" height="25px">
                                    </div>
                                    <text>
                                        radio
                                    </text>
                                </div>
                            </a>
                            <div>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href=""
                                    id="abbigliamento" onclick="expandOrCollapseCategory(this)">
                                    <div class="d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="resurces/soldier-shirt.svg" width="25px" height="25px">
                                        </div>
                                        <text>
                                            abbigliamento
                                        </text>
                                    </div>
                                </a>
                                <div class="subcategory ms-4" name="abbigliamento" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" href="" id="anfibi">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="resurces/boot.svg" width="25px" height="25px">
                                            </div>
                                            <text>
                                                anfibi
                                            </text>
                                        </div>
                                    </a>
                                </div>
                                <div class="subcategory ms-4" name="abbigliamento" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" href="" id="patch">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="resurces/patch.svg" width="25px" height="25px">
                                            </div>
                                            <text>
                                                patch
                                            </text>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href=""
                                    id="protezioni" onclick="expandOrCollapseCategory(this)">
                                    <div class="d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="resurces/soldier-protections.svg" width="25px" height="25px">
                                        </div>
                                        <text>
                                            protezioni
                                        </text>
                                    </div>
                                </a>
                                <div class="subcategory ms-4" name="protezioni" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" href="" id="occhiali-protettivi">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="resurces/glasses.svg" width="25px" height="25px">
                                            </div>
                                            <text>
                                                occhiali protettivi
                                            </text>
                                        </div>
                                    </a>
                                </div>
                                <div class="subcategory ms-4" name="protezioni" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" href="" id="patch">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="resurces/helmet.svg" width="25px" height="25px">
                                            </div>
                                            <text>
                                                elmetti
                                            </text>
                                        </div>
                                    </a>
                                </div>
                                <div class="subcategory ms-4" name="protezioni" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" href="" id="patch">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="resurces/gloves.svg" width="25px" height="25px">
                                            </div>
                                            <text>
                                                guanti
                                            </text>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href=""
                                id="sistemi-puntamento" onclick="expandOrCollapseCategory(this)">
                                <div class="d-flex align-items-center">
                                    <div class="circle me-3">
                                        <img src="resurces/scope.svg" width="25px" height="25px">
                                    </div>
                                    <text>
                                        sistemi di puntamento
                                    </text>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <?php
                include('views/user/db_connect.php');
                $query = 'SELECT * FROM listings';
                $response = mysqli_query($connect, $query);
                while ($listing = $response->fetch_array()) {
                    echo '
                    <div class="card m-3 rounded-4 listing-card">
                        <div class="row g-0">
                            <div class="col-6 d-flex align-items-center justify-content-center">
                                <div class="card rounded-3 p-1 listing-image">
                                    <img src="https://mediacore.kyuubi.it/ilsemaforo/media/img/2020/7/17/159156-large-hk416-a5-v2-ral8000-cqb-full-metal-tan.jpg"
                                        class="img-fluid" alt="...">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card-body h-100">
                                    <h5 class="card-title">' . $listing['title'] . '</h5>
                                    <p class="card-text">' . $listing['description'] . '</p>
                                    <div class="row">
                                        <div class="col">
                                        <p class="card-text text-muted">500$</p>
                                        </div>
                                        <div class="col">
                                        <a class="btn btn-warning" href="" role="button">contatta</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
                }
                ?>
                <div class="card m-3 rounded-4" style="width: 441px; height: 221px;">
                    <div class="row g-0 m-auto">
                        <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="card rounded-3 p-1 listing-image">
                                <img src="https://mediacore.kyuubi.it/ilsemaforo/media/img/2020/7/17/159156-large-hk416-a5-v2-ral8000-cqb-full-metal-tan.jpg"
                                    class="img-fluid" alt="...">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                <h5 class="card-title">HK416 VFC</h5>
                                <p class="card-text">descrizione prodotto descrizione prodotto descrizione prodotto.</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text text-muted">500$</p>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-warning" href="" role="button">contatta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col bg-secondary">
                <div class="sticky-top">
                    ADVERTISEMENT.
                </div>
            </div>
        </div>
    </div>
</body>
<div id="footer"></div>
<script src="templates/index_template.js"></script>

</html>