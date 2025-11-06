<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('owner.dashboard') ? 'active' : '' }}" href="{{route('owner.dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('owner.drivers_list') ? 'active' : '' }}"  href="{{route('owner.drivers_list')}}" aria-expanded="false" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Drivers</span>
            </a>

        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('owner.loan_list') ? 'active' : '' }}" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Loans</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('owner.loan_list')}}">List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('owner.loan_registration')}}">Driver assign</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('owner.agreements_list') ? 'active' : '' }}"  data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Agreements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('owner.agreements_list')}}">List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('owner.agreements_creation')}}">Create</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('owner.vehicles_list') ? 'active' : '' }}" href="{{route('owner.vehicles_list')}}">
                <i class="icon-monitor menu-icon"></i>
                <span class="menu-title">Vehicles</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('owner.payments_list') ? 'active' : '' }}" href="{{route('owner.payments_list')}}">
                <i class="icon-paper-clip menu-icon"></i>
                <span class="menu-title">Payments</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('owner.reports') ? 'active' : '' }}" href="{{route('owner.reports')}}">
                <i class="icon-record menu-icon"></i>
                <span class="menu-title">Reports</span>
            </a>
        </li>
    </ul>
</nav>
