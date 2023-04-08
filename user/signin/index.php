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
        echo '
            <div class="d-flex">
            <a class="btn btn-outline-primary" role="button" href="/mercatinodelsoftair/user/signup/index.php">Registrati</a>
            </div>
            ';
    ?>
</nav>

<body>
    <div class="w-100 d-flex justify-content-center">
        <div class="card form-card m-5 p-4">
            <form action="/mercatinodelsoftair/user/be_signin/index.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <div class="mb-3">
                        <h3>Accedi</h3>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" id="email" class="form-control my-2" placeholder="email"
                        autocomplete="email" required>
                        <input type="password" name="password" id="password" class="form-control my-2"
                        autocomplete="password" placeholder="password" required>
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
<script src="/mercatinodelsoftair/templates/user_template.js"></script>

</html>