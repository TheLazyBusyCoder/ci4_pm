document.addEventListener("DOMContentLoaded", function () {
    const menuItems = document.querySelectorAll(".l-menu-item-4wzxva6cxic5");
    const submenus = document.querySelectorAll(".l-submenu-4wzxva6cxic5");
    let activeSubmenu = null;
    menuItems.forEach((item) => {
        item.addEventListener("click", function (e) {
            e.stopPropagation();
            const menuType = this.getAttribute("data-menu");
            const submenu = document.getElementById(
                `l-submenu-${menuType}-4wzxva6cxic5`
            );
            if (activeSubmenu && activeSubmenu !== submenu) {
                activeSubmenu.classList.remove("show-4wzxva6cxic5");
                document
                    .querySelector(".l-menu-item-4wzxva6cxic5.active-4wzxva6cxic5")
                    ?.classList.remove("active-4wzxva6cxic5");
            }
            if (submenu) {
                const rect = this.getBoundingClientRect();
                submenu.style.left = rect.left + "px";
                if (submenu.classList.contains("show-4wzxva6cxic5")) {
                    submenu.classList.remove("show-4wzxva6cxic5");
                    this.classList.remove("active-4wzxva6cxic5");
                    activeSubmenu = null;
                } else {
                    submenu.classList.add("show-4wzxva6cxic5");
                    this.classList.add("active-4wzxva6cxic5");
                    activeSubmenu = submenu;
                }
            }
        });
    });
    document.addEventListener("click", function () {
        submenus.forEach((submenu) => {
            submenu.classList.remove("show-4wzxva6cxic5");
        });
        menuItems.forEach((item) => {
            item.classList.remove("active-4wzxva6cxic5");
        });
        activeSubmenu = null;
    });
    submenus.forEach((submenu) => {
        submenu.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    });
});
