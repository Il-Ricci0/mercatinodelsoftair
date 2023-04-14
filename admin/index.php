<?php
session_start();
?>

<html>

<head>
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="control_panel.css">
    <script type="text/javascript" src="/mercatinodelsoftair/vendor/bootstrap/bootstrap.js"></script>
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="/mercatinodelsoftair/vendor/fontawesome/css/all.css">
</head>

<div id="header"></div>

<body>
    <div class="container">
        <div class="list-group m-3" id="categories">
            <?php
            include('../db_connect.php');

            $query = 'SELECT username, email FROM users';
            $statement = $mysqli->prepare($query);
            $statement->execute();
            $statement->bind_result($username, $email);

            while($statement->fetch()){
                echo '
                <div class="list-group-item d-flex align-items-center">
                    <div class="circle mx-2"><i class="fa-solid fa-user"></i></div>
                    <div class="mx-1">
                        <text>5</text><i class="fa-solid fa-star rating"></i>
                    </div>
                    <div class="mx-1 username-list">
                        <text>'.$username.'</text>
                    </div>
                    <div class="vr"></div>
                    <div class="mx-1 px-1 id-list">
                        <text>'.$email.'</text>
                    </div>
                    <div class="vr"></div>
                    <div class="mx-1 px-1">
                        <text>Action:</text>
                        <a class="text-danger" href="">ban</a>
                        <a class="text-success" href="">unban</a>
                    </div>
                </div>
                ';
            }

            ?>
        </div>
</body>
<div id="footer"></div>
<script src="/mercatinodelsoftair/templates/admin_template.js"></script>

</html>