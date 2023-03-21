const basepath = '/mercatinodelsoftair'
function route(address) {
    let path = basepath;
    switch (address) {
        case '/home':
            path += '/';
            break;
        case '/signin':
            path += '/user/signin/';
            break;
        case '/signup':
            path += '/user/signup/';
            break;
        case '/listing':
            path += '/user/create_listing/';
            break;
        case '/be_signin':
            path += '/user/be_signin/';
            break;
        case '/be_signup':
            path += '/user/be_signup/';
            break;
        case '/be_listing':
            path += '/user/be_listing/';
            break;
        case '/be_logout':
            path += '/user/be_logout/';
            break;

    }
    window.location.replace(path);
}