function expandOrCollapseCategory() {
    let urlParams = new URLSearchParams(window.location.search);
    let id = urlParams.get('id');
    let subcategories = document.querySelectorAll('.subcategory');
    subcategories.forEach(subcategory => {
        subcategory.setAttribute('hidden', '');
    });
    subcategories = document.getElementsByName(id);
    subcategories.forEach(subcategory => {
        if (subcategory.hasAttribute('hidden'))
            subcategory.removeAttribute('hidden');
    });
    try {

        let macrocategory = document.getElementById(id).parentElement.getAttribute('name');
        subcategories = document.getElementsByName(macrocategory);
        subcategories.forEach(subcategory => {
            if (subcategory.hasAttribute('hidden'))
                subcategory.removeAttribute('hidden');
        });
        let selected = document.getElementById(id);
        selected.classList.add('bg-primary');
        selected.classList.add('text-light');
    }
    catch { }
}

function filter(id, category) {
    let urlParams = new URLSearchParams(window.location.search);
    let queryId = urlParams.get('id');
    let search = urlParams.get('search');
    if (queryId == id && search == null) {
        window.location.href = '/mercatinodelsoftair/user/favourite_listings/index.php';
    }
    else if (queryId == id && search != null) {
        window.location.href = '/mercatinodelsoftair/user/favourite_listings/index.php?search=' + search;
    }
    else if (search != null) {
        window.location.href = '/mercatinodelsoftair/user/favourite_listings/index.php?id=' + id + '&' + 'category=' + category + '&search=' + search;
    } else {
        window.location.href = '/mercatinodelsoftair/user/favourite_listings/index.php?id=' + id + '&' + 'category=' + category;
    }
}

function expandOrCollapseUserMenu() {
    menu = document.getElementById('user-menu');
    if (menu.hasAttribute('hidden')) {
        menu.removeAttribute('hidden');
    }
    else {
        menu.setAttribute('hidden', '');
    }
}

function updateSearchPlaceholder() {
    let urlParams = new URLSearchParams(window.location.search);
    let search = urlParams.get('search');
    document.getElementById('search').value = search;
}

function search() {
    let search = document.getElementById('search').value;
    let urlParams = new URLSearchParams(window.location.search);
    let id = urlParams.get('id');
    let category = urlParams.get('category');
    if (id != null && category != null && search != null) {
        window.location.href = '/mercatinodelsoftair/user/favourite_listings/index.php?id=' + id + '&' + 'category=' + category + '&search=' + search;
    }
    else if (search != null) {
        window.location.href = '/mercatinodelsoftair/user/favourite_listings/index.php?search=' + search;
    }
    else {
        window.location.href = '/mercatinodelsoftair/user/favourite_listings/index.php';
    }
}

