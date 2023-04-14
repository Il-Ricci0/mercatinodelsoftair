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

            $query = 'SELECT username, email, status FROM users';
            $statement = $connect->prepare($query);
            $statement->execute();
            $statement->bind_result($username, $email, $status);

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
                    <div class="mx-1 px-1 email-list">
                        <text>'.$email.'</text>
                    </div>
                    <div class="vr"></div>
                    <div class="mx-1 px-1">
                        <text>Action:</text>
                ';
                if($status == 'active'){
                    echo '<a class="text-danger" href="/mercatinodelsoftair/admin/be_user_management/?ban='.$email.'">ban</a>';
                }
                else if($status == 'banned'){
                    echo '<a class="text-success" href="/mercatinodelsoftair/admin/be_user_management/?unban='.$email.'">unban</a>';
                }
                echo '
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