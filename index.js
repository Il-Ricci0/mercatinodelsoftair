function expandOrCollapseCategory() {
    let urlParams = new URLSearchParams(window.location.search);
    let id = urlParams.get('id');
    let subcategories = document.querySelectorAll(".subcategory");
    subcategories.forEach(subcategory => {
        subcategory.setAttribute("hidden", "");
    });
    subcategories = document.getElementsByName(id);
    subcategories.forEach(subcategory => {
        if (subcategory.hasAttribute("hidden"))
            subcategory.removeAttribute("hidden");
    });
    let macrocategory = document.getElementById(id).parentElement.getAttribute('name');
    subcategories = document.getElementsByName(macrocategory);
    subcategories.forEach(subcategory => {
        if (subcategory.hasAttribute("hidden"))
            subcategory.removeAttribute("hidden");
    });
    let selected = document.getElementById(id);
    selected.classList.add('bg-primary');
    selected.classList.add('text-light');
}

function filter(id, category) {
    let urlParams = new URLSearchParams(window.location.search);
    let queryId = urlParams.get('id');
    if (queryId == id) {
        window.location.href = "/mercatinodelsoftair/index.php";
    } else {
        window.location.href = "/mercatinodelsoftair/index.php?id=" + id + "&" + "category=" + category;
    }
}

function expandOrCollapseUserMenu() {
    menu = document.getElementById("user-menu");
    if (menu.hasAttribute("hidden")) {
        menu.removeAttribute("hidden");
    }
    else {
        menu.setAttribute("hidden", "");
    }
}