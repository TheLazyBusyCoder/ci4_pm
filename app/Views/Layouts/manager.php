<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manager</title>
    <style>
        :root {
            --border-color: #2a2a2a;
            --bg-main: #1a1a1a;
            --bg-header: #1e1e1e;
            --bg-toolbar: #1e1e1e;
            --bg-table: #1a1a1a;
            --text-primary: #e0e0e0;
            --text-muted: #888;
            --accent-color: #3b82f6;
            --focus-color: #3b82f6;
            --success-color: #22c55e;
            --error-color: #ef4444;
            --warning-color: #f59e0b;
            --info-color: #3b82f6;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .l-body-j0b5g5zms1bm {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: var(--bg-main);
            color: var(--text-primary);
            font-size: 13px;
            width: 999px;
            margin: 0 auto;
        }
        .l-menu-j0b5g5zms1bm {
            height: 28px;
            background: var(--bg-menu);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            position: relative;
        }
        .l-menu-item-j0b5g5zms1bm {
            padding: 2px 6px;
            cursor: pointer;
            position: relative;
        }
        .l-menu-item-j0b5g5zms1bm:hover {
            background: var(--bg-toolbar);
        }
        .l-menu-item-j0b5g5zms1bm.active-j0b5g5zms1bm {
            background: var(--bg-toolbar);
        }
        .l-submenu-j0b5g5zms1bm {
            display: none;
            position: absolute;
            top: 28px;
            background: var(--bg-toolbar);
            border: 1px solid var(--border-color);
            min-width: 150px;
            max-height: 400px;
            overflow-y: auto;
            z-index: 1000;
        }
        .l-submenu-j0b5g5zms1bm.show-j0b5g5zms1bm {
            display: block;
        }
        .l-submenu-item-j0b5g5zms1bm {
            padding: 4px 12px;
            cursor: pointer;
        }
        .l-submenu-item-j0b5g5zms1bm a {
            cursor: pointer;
            text-decoration: none;
            color: var(--text-primary);
        }
        .l-submenu-item-j0b5g5zms1bm:hover {
            background: var(--accent-color);
        }
        .l-submenu-separator-j0b5g5zms1bm {
            height: 1px;
            background: var(--border-color);
            margin: 2px 0;
        }
        .l-submenu-j0b5g5zms1bm::-webkit-scrollbar {
            width: 8px;
        }
        .l-submenu-j0b5g5zms1bm::-webkit-scrollbar-track {
            background: var(--bg-main);
        }
        .l-submenu-j0b5g5zms1bm::-webkit-scrollbar-thumb {
            background: var(--border-color);
        }
        .l-navbar-j0b5g5zms1bm {
            height: 40px;
            background: var(--bg-nav);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .l-navbar-actions-j0b5g5zms1bm {
            display: flex;
            gap: 6px;
        }
        .l-btn-j0b5g5zms1bm {
            background: var(--bg-menu);
            color: var(--text-primary);
            border: 1px solid var(--border-color);
            padding: 4px 10px;
            font-size: 12px;
            cursor: pointer;
            text-decoration: none;
        }
        .l-container-j0b5g5zms1bm {
            background: var(--bg-nav);
            border: 1px solid var(--border-color);
            padding: 12px;
        }

    </style>
    <?= $this->renderSection('css') ?>
</head>

<body class="l-body-j0b5g5zms1bm">
    <div class="l-navbar-j0b5g5zms1bm">
        <div class="l-navbar-actions-j0b5g5zms1bm">
            <a href="/manager/dashboard" class="l-btn-j0b5g5zms1bm">Dashboard</a>
            <a href="/manager/teams" class="l-btn-j0b5g5zms1bm">Teams</a>
            <form action="/auth/logout" method="post" style="margin:0;">
                <?= csrf_field() ?>
                <button class="l-btn-j0b5g5zms1bm" type="submit">
                    Logout
                </button>
            </form>
        </div>
    </div>
    <div class="l-main-j0b5g5zms1bm">
        <div class="l-container-j0b5g5zms1bm">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuItems = document.querySelectorAll(".l-menu-item-j0b5g5zms1bm");
            const submenus = document.querySelectorAll(".l-submenu-j0b5g5zms1bm");
            let activeSubmenu = null;
            menuItems.forEach((item) => {
                item.addEventListener("click", function (e) {
                    e.stopPropagation();
                    const menuType = this.getAttribute("data-menu");
                    const submenu = document.getElementById(
                        `l-submenu-${menuType}-j0b5g5zms1bm`
                    );
                    if (activeSubmenu && activeSubmenu !== submenu) {
                        activeSubmenu.classList.remove("show-j0b5g5zms1bm");
                        document
                            .querySelector(".l-menu-item-j0b5g5zms1bm.active-j0b5g5zms1bm")
                            ?.classList.remove("active-j0b5g5zms1bm");
                    }
                    if (submenu) {
                        const rect = this.getBoundingClientRect();
                        submenu.style.left = rect.left + "px";
                        if (submenu.classList.contains("show-j0b5g5zms1bm")) {
                            submenu.classList.remove("show-j0b5g5zms1bm");
                            this.classList.remove("active-j0b5g5zms1bm");
                            activeSubmenu = null;
                        } else {
                            submenu.classList.add("show-j0b5g5zms1bm");
                            this.classList.add("active-j0b5g5zms1bm");
                            activeSubmenu = submenu;
                        }
                    }
                });
            });
            document.addEventListener("click", function () {
                submenus.forEach((submenu) => {
                    submenu.classList.remove("show-j0b5g5zms1bm");
                });
                menuItems.forEach((item) => {
                    item.classList.remove("active-j0b5g5zms1bm");
                });
                activeSubmenu = null;
            });
            submenus.forEach((submenu) => {
                submenu.addEventListener("click", function (e) {
                    e.stopPropagation();
                });
            });
        });

    </script>
    <?= $this->renderSection('js') ?>
</body>

</html>