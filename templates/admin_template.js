//Extension to convert (html->string) (string-> html) https://marketplace.visualstudio.com/items?itemName=weber87na.htmltostring

//html at page start
document.getElementById("header").innerHTML =
    '<link rel="stylesheet" href="../../vendor/bootstrap/bootstrap.css">'
    + '<link rel="stylesheet" href="../../vendor/fontawesome/css/fontawesome.css">'
    + '<link rel="stylesheet" href="../../vendor/fontawesome/css/all.css"></link>'
    + '<nav class="navbar bg-danger p-2">'
    + '<a class="navbar-brand" href="index.php">'
    + '<img src="../../resurces/logo.svg" width="100">'
    + '</a>'
    + '<form class="form-inline d-flex">'
    + '<input class="form-control rounded-end-0" type="search" placeholder="cerca utente">'
    + '<button class="btn btn-warning rounded-start-0" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>'
    + '</form>'
    + '<div class="d-flex">'
    + '<div class="admin-circle"> <i class="fa-solid fa-user-shield"></i></div>'
    + '</div>'
    + '</nav>'
    ;
//html at page end
document.getElementById("footer").innerHTML =
    '<footer class="bg-light p-3">'
    + '<text>developers: <a href="https://twitter.com/il_ricci0">@il_ricci0</a>, <a href="https://twitter.com/Davide45123530">@devyz</a> on twitter</text>'
    + '</footer>'
    ;