<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" data-lte-toggle="sidebar" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown user-menu">
                <a class="nav-link dropdown-toggle cursor-pointer" data-bs-toggle="dropdown">
                    <span class="d-inline">{{ auth()->user()->name }}</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    {{ $slot }}
                </ul>
            </li>
        </ul>
    </div>
</nav>
