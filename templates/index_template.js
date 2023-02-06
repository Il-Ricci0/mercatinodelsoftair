//Extension to convert (html->string) (string-> html) https://marketplace.visualstudio.comfontawesome/items?itemName=weber87na.htmltostring

//html at page start
document.getElementById("header").innerHTML =
    '<link rel="stylesheet" href="vendor/bootstrap/bootstrap.css">'
    + '<link rel="stylesheet" href="vendor/fontawesome/css/fontawesome.css">'
    + '<link rel="stylesheet" href="vendor/fontawesome/css/all.css"></link>'
    + '<nav class="navbar bg-light p-2">'
    + '<a class="navbar-brand" href="index.html">'
    + '<img src="resurces/logo.svg" width="150">'
    + '</a>'
    + '<form class="form-inline d-flex">'
    + '<input class="form-control rounded-end-0" type="search" placeholder="cerca annuncio">'
    + '<button class="btn btn-primary rounded-start-0" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>'
    + '</form>'
    + '<div class="d-flex">'
    + '<a class="btn btn-outline-secondary" role="button" href="views/user/create_listing.html">Crea annuncio</a>'
    + '<a class="btn btn-outline-primary rounded-end-0 ms-1" role="button" href="views/user/signup.html">Registrati</a>'
    + '<a class="btn btn-outline-primary rounded-start-0 border-start-0" role="button" href="views/user/signin.html">Accedi</a>'
    + '</div>'
    + '</nav>'
    ;
//html at page end
document.getElementById("footer").innerHTML =
    '<footer class="bg-light p-3">'
    + '<text>developers: <a href="https://twitter.com/il_ricci0">@il_ricci0</a> on twitter, <a href="">@devyz</a> irl</text>'
    + '</footer>'
    ;