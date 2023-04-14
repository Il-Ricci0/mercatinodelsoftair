<?php
session_start();
$queryString = $_SERVER['QUERY_STRING'];
$url = $_SERVER['PHP_SELF'] . '?' . $queryString;
$_SESSION['previousURL'] = $url;
?>
<html>

<head>
    <script type="text/javascript" src="index.js"></script>
    <script type="text/javascript" src="/mercatinodelsoftair/vendor/bootstrap/bootstrap.js"></script>
    <link rel="stylesheet" href="/mercatinodelsoftair/index.css">
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/fontawesome/css/all.css">
    </link>
</head>

<nav class="navbar bg-light p-2">
    <a class="navbar-brand" href="/mercatinodelsoftair/">
        <img src="/mercatinodelsoftair/resurces/logo.svg" width="150">
    </a>
    <div class="form-inline d-flex">
        <input type="text" class="form-control rounded-end-0" name="search" id="search">
        <button class="btn btn-primary rounded-start-0" onclick="search()"><i
                class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
    </div>
    <?php
    if (!isset($_SESSION['logged_in'])) {
        echo '
        <div class="d-flex">
        <a class="btn btn-outline-secondary" role="button" href="/mercatinodelsoftair/user/create_listing/">Crea annuncio</a>
        <a class="btn btn-outline-primary rounded-end-0 ms-1" role="button" href="/mercatinodelsoftair/user/signup/">Registrati</a>
        <a class="btn btn-outline-primary rounded-start-0 border-start-0" role="button" href="/mercatinodelsoftair/user/signin/">Accedi</a>
        </div>
        ';
    } else {
        echo '
        <div class="d-flex align-items-center">
        <a class="btn btn-outline-secondary me-2" role="button" href="/mercatinodelsoftair/user/create_listing/">Crea annuncio</a>
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
            href="/mercatinodelsoftair/user/account_management/">Impostazioni</a>
        <a class="btn btn-light rounded-0 d-block" href="/mercatinodelsoftair/user/your_listings/" role="button">I tuoi
            annunci</a>
        <a class="btn btn-light rounded-0 d-block" href="/mercatinodelsoftair/user/favourite_listings/"
            role="button">Annunci salvati</a>
        <a class="btn btn-danger rounded-top-0 border-top-0 d-block"
            href="/mercatinodelsoftair/user/be_logout/" role="button" id="logout-button">Esci</a>
    </div>
</div>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sticky-top">
                    <div class="card m-3 rounded-4 d-flex align-items-center">
                        <h5 class="text-muted">categorie:</h5>
                        <div class="list-group mx-3 mb-3" id="categories">
                            <div>
                                <a class="list-group-item list-group-item-action border-bottom-0" data-bs-toggle="list"
                                    id="fucili-bolt-action" name="fucili bolt action"
                                    onclick="filter(this.id, this.name)">
                                    <div class=" d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="/mercatinodelsoftair/resurces/vsr.svg" width="25px" height="25px">
                                        </div>
                                        <text>
                                            fucili bolt action
                                        </text>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                    id="fucili-elettrici" name="fucili elettrici" onclick="filter(this.id, this.name)">
                                    <div class="d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="/mercatinodelsoftair/resurces/ak47.svg" width="25px"
                                                height="25px">
                                        </div>
                                        <text>fucili elettrici</text>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                    id="fucili-gas-scarrellanti" name="fucili a gas scarrellanti"
                                    onclick="filter(this.id, this.name)">
                                    <div class="d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="/mercatinodelsoftair/resurces/aug.svg" width="25px" height="25px">
                                        </div>
                                        <text>
                                            fucili a gas scarrellanti
                                        </text>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                    id="fucili-pump-action" name="fucili pump action"
                                    onclick="filter(this.id, this.name)">
                                    <div class="d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="/mercatinodelsoftair/resurces/model1897.svg" width="25px"
                                                height="25px">
                                        </div>
                                        <text>
                                            fucili pump action
                                        </text>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" id="radio"
                                    name="radio" onclick="filter(this.id, this.name)">
                                    <div class="d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="/mercatinodelsoftair/resurces/radio.svg" width="25px"
                                                height="25px">
                                        </div>
                                        <text>
                                            radio
                                        </text>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                    id="abbigliamento" name="abbigliamento" onclick="filter(this.id, this.name)">
                                    <div class="d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="/mercatinodelsoftair/resurces/soldier-shirt.svg" width="25px"
                                                height="25px">
                                        </div>
                                        <text>
                                            abbigliamento
                                        </text>
                                    </div>
                                </a>
                                <div class="subcategory ms-4" name="abbigliamento" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" id="anfibi" name="anfibi"
                                        onclick="filter(this.id, this.name)">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="/mercatinodelsoftair/resurces/boot.svg" width="25px"
                                                    height="25px">
                                            </div>
                                            <text>
                                                anfibi
                                            </text>
                                        </div>
                                    </a>
                                </div>
                                <div class="subcategory ms-4" name="abbigliamento" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" id="patch" name="patch"
                                        onclick="filter(this.id, this.name)">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="/mercatinodelsoftair/resurces/patch.svg" width="25px"
                                                    height="25px">
                                            </div>
                                            <text>
                                                patch
                                            </text>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" id="protezioni"
                                    name="protezioni" onclick="filter(this.id, this.name)">
                                    <div class="d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="/mercatinodelsoftair/resurces/soldier-protections.svg"
                                                width="25px" height="25px">
                                        </div>
                                        <text>
                                            protezioni
                                        </text>
                                    </div>
                                </a>
                                <div class="subcategory ms-4" name="protezioni" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" id="occhiali-protettivi" name="occhiali protettivi"
                                        onclick="filter(this.id, this.name)">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="/mercatinodelsoftair/resurces/glasses.svg" width="25px"
                                                    height="25px">
                                            </div>
                                            <text>
                                                occhiali protettivi
                                            </text>
                                        </div>
                                    </a>
                                </div>
                                <div class="subcategory ms-4" name="protezioni" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" id="elmetti" name="elmetti"
                                        onclick="filter(this.id, this.name)">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="/mercatinodelsoftair/resurces/helmet.svg" width="25px"
                                                    height="25px">
                                            </div>
                                            <text>
                                                elmetti
                                            </text>
                                        </div>
                                    </a>
                                </div>
                                <div class="subcategory ms-4" name="protezioni" hidden>
                                    <a class="list-group-item list-group-item-action border-bottom-0"
                                        data-bs-toggle="list" id="guanti" name="guanti"
                                        onclick="filter(this.id, this.name)">
                                        <div class="d-flex align-items-center">
                                            <div class="circle me-3">
                                                <img src="/mercatinodelsoftair/resurces/gloves.svg" width="25px"
                                                    height="25px">
                                            </div>
                                            <text>
                                                guanti
                                            </text>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                    id="sistemi-puntamento" name="sistemi di puntamento"
                                    onclick="filter(this.id, this.name)">
                                    <div class="d-flex align-items-center">
                                        <div class="circle me-3">
                                            <img src="/mercatinodelsoftair/resurces/scope.svg" width="25px"
                                                height="25px">
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
            </div>
            <div class="col">
                <?php
                include('../../db_connect.php');
                $statement = $connect->prepare("SELECT listing FROM favourites WHERE user=?");
                $statement->bind_param("s", $_SESSION['email']);
                $statement->bind_result($favourite);
                $statement->execute();
                $favourites = array();
                while ($statement->fetch()) {
                    array_push($favourites, $favourite);
                }
                $statement->close();

                $query = '';
                if (isset($_GET["search"])) {
                    $search = htmlspecialchars($_GET["search"]);
                    $search_words = explode(" ", $search);
                    $search_words_query = '"';
                    foreach ($search_words as $word) {
                        $search_words_query .= '%' . $word;
                    }
                    $search_words_query .= '%"';
                    $query = 'SELECT id, user, title, description, price, category, (SELECT COUNT(listings.id) FROM listings WHERE status="active" AND title LIKE ' . $search_words_query . ') AS nrows FROM listings WHERE status="active" AND title LIKE ' . $search_words_query;

                } else {
                    $query = 'SELECT id, user, title, description, price, category, (SELECT COUNT(listings.id) FROM listings WHERE status="active") AS nrows FROM listings WHERE status="active"';
                }
                if (isset($_GET["category"])) {
                    $category = htmlspecialchars($_GET["category"]);
                    $query .= ' AND category="' . $category . '"';
                }
                $statement = $connect->prepare($query);
                $statement->bind_result($id, $user, $title, $description, $price, $category, $rows);
                $statement->execute();
                while ($statement->fetch()) {
                    $max_description_length = 75;
                    if (strlen($description) >= $max_description_length) {
                        $description = substr($description, 0, -(strlen($description) - $max_description_length));
                        $description .= '...';
                    }
                    if ($rows == null) {
                        echo '
                             <div class="d-flex align-items-center justify-content-center">
                             <text class="text-muted">Annunci non trovati.</text>
                             </div>
                             ';
                        break;
                    } else {
                        if (in_array($id, $favourites)) {
                            echo '
                         <div class="card m-3 rounded-4 listing-card">
                             <div class="row">
                                 <div class="col-6 d-flex align-items-start justify-content-center listing-image-box">
                                     <div class="card rounded-3 p-1 listing-image">
                                         <img src="https://mediacore.kyuubi.it/ilsemaforo/media/img/2020/7/17/159156-large-hk416-a5-v2-ral8000-cqb-full-metal-tan.jpg"
                                             class="img-fluid">
                                     </div>
                                 </div>
                                 <div class="col-6">
                                     <div class="card-body py-0">
                                     <div class="listing-content">
                                         <div class="d-flex justify-content-end">
                                            <a href="/mercatinodelsoftair/user/be_favourites/?action=unfavourite&listing=' . $id . '"><i class="fa-solid fa-bookmark" style="color: #0084ff;"></i></a>
                                         </div>
                                         <h5 class="card-title">' . $title . '</h5>
                                             <p class="card-text">' . $description . '</p>
                                         </div>
                                         <div class="row mt-2">
                                             <div class="col-6">
                                                 <p class="card-text text-muted">' . $price . '€' . '</p>
                                             </div>
                                             <div class="col-6">
                                                 <a class="btn btn-warning" role="button" href="/mercatinodelsoftair/user/view_listing/?id=' . $id . '">vedi</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     ';
                        }
                    }
                }
                ?>
            </div>
            <div class="col">
                <div class="sticky-top">
                </div>
            </div>
        </div>
    </div>
</body>
<div id="footer"></div>
<script src="/mercatinodelsoftair/templates/index_template.js"></script>
<script>
    updateSearchPlaceholder();
    expandOrCollapseCategory();
</script>

</html>