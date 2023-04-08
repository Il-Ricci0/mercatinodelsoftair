expandOrCollapseCategory();

function expandOrCollapseCategory() {
    let urlParams = new URLSearchParams(window.location.search);
    let id = urlParams.get('id');
    console.log(id);
    let subcategories = document.querySelectorAll(".subcategory");
    subcategories.forEach(subcategory => {
        subcategory.setAttribute("hidden", "");
    });
    subcategories = document.getElementsByName(id);
    subcategories.forEach(subcategory => {
        if (subcategory.hasAttribute("hidden"))
            subcategory.removeAttribute("hidden");
    });
}

function filter(id, category) {
    window.location.href = "/mercatinodelsoftair/index.php?id=" + id + "category=" + category;
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