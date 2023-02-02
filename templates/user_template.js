//Extension to convert (html->string) (string-> html) https://marketplace.visualstudio.com/items?itemName=weber87na.htmltostring

//html at page start
document.getElementById("header").innerHTML =
    '<head>'
    + '<script src="../../vendor/bootstrap/bootstrap.js"></script>'
    + '<link rel="stylesheet" href="../../vendor/bootstrap/bootstrap.css">'
    + '<link rel="stylesheet" href="../../vendor/fontawesome/css/fontawesome.css">'
    + '<link rel="stylesheet" href="../../vendor/fontawesome/css/all.css">'
    + '</head>'
    + '<nav class="navbar bg-light p-2">'
    + '<a class="navbar-brand" href="index.html">'
    + '<img src="../../resurces/logo.svg" width="150" alt="" />'
    + '</a>'
    + '<form class="form-inline d-flex">'
    + '<input class="form-control rounded-end-0" type="search" placeholder="cerca annuncio">'
    + '<button class="btn btn-primary rounded-start-0" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>'
    + '</form>'
    + '<div class="d-flex">'
    + '<form method="GET" action="create_listing.html" class="navbar-item form-inline">'
    + '<button class="btn btn-outline-secondary" type="submit">Crea annuncio</button>'
    + '</form>'
    + '<form method="GET" action="signup.html" class="navbar-item form-inline ms-1">'
    + '<button class="btn btn-outline-primary rounded-end-0" type="submit">Registrati</button>'
    + '</form>'
    + '<form method="GET" action="signin.html" class="navbar-item form-inline">'
    + '<button class="btn btn-outline-primary rounded-start-0 border-start-0" type="submit">Accedi</button>'
    + '</form>'
    + '</div>'
    + '</nav>'
    ;
//html at page end
document.getElementById("footer").innerHTML =
    '<footer class="bg-light p-3">'
    + '<text>developers: <a href="https://twitter.com/il_ricci0">@il_ricci0</a> on twitter.</text>'
    + '</footer>'
    ;