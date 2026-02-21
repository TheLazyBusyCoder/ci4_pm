<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LeanUI Framework</title>
    <link rel="stylesheet" href="leanui-4wzxva6cxic5.css">
</head>

<body class="l-body-4wzxva6cxic5">
    <div class="l-menu-4wzxva6cxic5">
        <div class="l-menu-item-4wzxva6cxic5" data-menu="dashboard">Dashboard</div>
        <div class="l-menu-item-4wzxva6cxic5" data-menu="users">User Management</div>
        <div class="l-menu-item-4wzxva6cxic5" data-menu="tasks">Task Monitoring</div>
        <div class="l-menu-item-4wzxva6cxic5" data-menu="updates">Task Updates</div>
        <div class="l-menu-item-4wzxva6cxic5" data-menu="reports">Reports</div>
        <div class="l-menu-item-4wzxva6cxic5" data-menu="system">System</div>

    </div>
    <div class="l-submenu-4wzxva6cxic5" id="l-submenu-dashboard-4wzxva6cxic5">
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/dashboard">Overview</a></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/activity">Activity Feed</a></div>
    </div>
    <div class="l-submenu-4wzxva6cxic5" id="l-submenu-users-4wzxva6cxic5">
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/users">All Users</a></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/users?role=manager">Managers</a></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/users?role=employee">Employees</a></div>
        <div class="l-submenu-separator-4wzxva6cxic5"></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/users/create">Add New User</a></div>
    </div>
    <div class="l-submenu-4wzxva6cxic5" id="l-submenu-tasks-4wzxva6cxic5">
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/tasks">All Tasks</a></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/tasks?status=pending">Pending Tasks</a></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/tasks?status=in_progress">In Progress Tasks</a></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/tasks?status=completed">Completed Tasks</a></div>
        <div class="l-submenu-separator-4wzxva6cxic5"></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/tasks?status=cancelled">Cancelled Tasks</a></div>
    </div>
    <div class="l-submenu-4wzxva6cxic5" id="l-submenu-updates-4wzxva6cxic5">
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/task-updates">All Updates</a></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/task-updates/recent">Recent Updates</a></div>
    </div>
    <div class="l-submenu-4wzxva6cxic5" id="l-submenu-reports-4wzxva6cxic5">
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/reports/managers">Manager Performance</a></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/reports/employees">Employee Performance</a></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/reports/tasks">Task Summary</a></div>
    </div>
    <div class="l-submenu-4wzxva6cxic5" id="l-submenu-system-4wzxva6cxic5">
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/logs">System Logs</a></div>
        <div class="l-submenu-separator-4wzxva6cxic5"></div>
        <div class="l-submenu-item-4wzxva6cxic5"><a href="/admin/settings">Settings</a></div>
    </div>

    <div class="l-navbar-4wzxva6cxic5">
        <div class="l-navbar-actions-4wzxva6cxic5">
            <a href="/admin/dashboard" class="l-btn-4wzxva6cxic5">Admin Dashboard</a>
            <a href="/admin/notifications" class="l-btn-4wzxva6cxic5">Notifications</a>
            <a href="/admin/profile" class="l-btn-4wzxva6cxic5">Profile</a>
            <a href="/logout" class="l-btn-4wzxva6cxic5">Logout</a>

        </div>
    </div>
    <div class="l-main-4wzxva6cxic5">
        <div class="l-container-4wzxva6cxic5">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
    <script src="leanui-4wzxva6cxic5.js"></script>
</body>

</html>