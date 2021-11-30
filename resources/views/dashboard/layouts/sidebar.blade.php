<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <i class="bi bi-house-door-fill"></i>
            Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/detail') ? 'active' : '' }}" href="/dashboard/detail">
                <i class="bi bi-file-earmark-text"></i>
                Detail Data
            </a>
        </li>
        </ul>
    </div>
</nav>