<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('driver.dashboard') ? 'active' : '' }}" href="{{route('driver.dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Loans</span>
            </a>

        </li>

        <li class="nav-item">
            <a class="nav-link" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Agreements</span>
            </a>

        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Vehicles</span>
            </a>
        </li>




    </ul>
</nav>
