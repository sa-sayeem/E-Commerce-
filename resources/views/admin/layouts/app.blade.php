
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Dashboard') | VELORA</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f6fa;
            font-family: Arial, sans-serif;
        }

        .admin-sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #171923;
            color: #fff;
            padding: 25px 18px;
            z-index: 1000;
            transition: 0.3s;
        }

        .sidebar-brand {
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 3px;
            text-align: center;
            padding: 10px 0 35px;
            border-bottom: 1px solid #303341;
        }

        .sidebar-brand span {
            display: block;
            font-size: 11px;
            color: #999;
            letter-spacing: 2px;
            margin-top: 5px;
        }

        .sidebar-heading {
            color: #777f91;
            font-size: 11px;
            font-weight: bold;
            margin: 30px 12px 12px;
            letter-spacing: 1px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 7px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px 15px;
            color: #b9bdca;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: #30364a;
            color: #fff;
        }

        .sidebar-menu a.active {
            border-left: 3px solid #c5a47e;
        }

        .sidebar-menu i {
            font-size: 18px;
        }

        .admin-main {
            margin-left: 260px;
            min-height: 100vh;
        }

        .admin-topbar {
            background: #fff;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
        }

        .admin-content {
            padding: 30px;
        }

        .menu-toggle {
            display: none;
            border: none;
            background: none;
            font-size: 25px;
        }

        .sidebar-overlay {
            display: none;
        }

        @media (max-width: 768px) {
            .admin-sidebar {
                left: -260px;
            }

            .admin-sidebar.show {
                left: 0;
            }

            .admin-main {
                margin-left: 0;
            }

            .menu-toggle {
                display: block;
            }

            .admin-content {
                padding: 18px;
            }

            .sidebar-overlay.show {
                display: block;
                position: fixed;
                inset: 0;
                background: rgba(0,0,0,0.5);
                z-index: 999;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    
<!-- Sidebar -->
<aside class="admin-sidebar" id="adminSidebar">

    <div class="sidebar-brand">
        VELORA
        <span>ADMIN PANEL</span>
    </div>

    <div class="sidebar-heading">MAIN MENU</div>

    <ul class="sidebar-menu">

        <li>
            <a href="{{ route('admin.dashboard') }}"
               class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid"></i>
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('admin.products') }}"
               class="{{ request()->routeIs('admin.products') ? 'active' : '' }}">
                <i class="bi bi-box-seam"></i>
                Products
            </a>
        </li>

        <li>
            <a href="{{ route('admin.orders') }}"
               class="{{ request()->routeIs('admin.orders') ? 'active' : '' }}">
                <i class="bi bi-cart3"></i>
                Orders
            </a>
        </li>

        <li>
            <a href="{{ route('admin.customers') }}"
               class="{{ request()->routeIs('admin.customers') ? 'active' : '' }}">
                <i class="bi bi-people"></i>
                Customers
            </a>
        </li>

        <li>
            <a href="{{ route('admin.messages') }}"
               class="{{ request()->routeIs('admin.messages') ? 'active' : '' }}">
                <i class="bi bi-envelope"></i>
                Messages
            </a>
        </li>

    </ul>

    <div class="sidebar-heading">OTHER</div>

    <ul class="sidebar-menu">

        <li>
            <a href="{{ route('admin.settings') }}"
               class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                <i class="bi bi-gear"></i>
                Settings
            </a>
        </li>

        <li>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="btn w-100 text-start text-decoration-none"
                    style="color:#b9bdca; padding:13px 15px;">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    Logout
                </button>
            </form>
        </li>

    </ul>

</aside>


    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Main Content -->
    <main class="admin-main">

        <header class="admin-topbar">

            <div class="d-flex align-items-center gap-3">
                <button class="menu-toggle" id="menuToggle">
                    <i class="bi bi-list"></i>
                </button>

                <h5 class="mb-0">@yield('page-heading', 'Dashboard')</h5>
            </div>

            <div class="text-secondary">
                <i class="bi bi-person-circle me-1"></i>
                Admin
            </div>

        </header>

        <section class="admin-content">
            @yield('content')
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const sidebar = document.getElementById('adminSidebar');
        const toggle = document.getElementById('menuToggle');
        const overlay = document.getElementById('sidebarOverlay');

        toggle.addEventListener('click', function () {
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        });

        overlay.addEventListener('click', function () {
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        });
    </script>

    @stack('scripts')

</body>
</html>