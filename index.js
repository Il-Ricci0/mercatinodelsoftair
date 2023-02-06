function expandOrCollapseCategory(category) {
    subcategories = document.querySelectorAll(".subcategory");
    subcategories.forEach(subcategory => {
        subcategory.setAttribute("hidden", "");
    });
    subcategories = document.getElementsByName(category.id);
    subcategories.forEach(subcategory => {
        if (subcategory.hasAttribute("hidden"))
            subcategory.removeAttribute("hidden");
    });
}