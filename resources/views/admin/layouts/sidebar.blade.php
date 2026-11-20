<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
                <img src="{{ asset('template-admin/src/assets/images/logos/logo.png') }}" width="180"
                    alt="Logo SIMINLAB" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                {{-- MENU HOME --}}
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item {{ Request::is('dashboard') ? 'selected' : '' }}">
                    <a class="sidebar-link {{ Request::is('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                {{-- MENU DATAMASTER --}}
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Datamaster</span>
                </li>
                <li class="sidebar-item {{ Request::is('users*') ? 'selected' : '' }}">
                    <a class="sidebar-link {{ Request::is('users*') ? 'active' : '' }}"
                        href="{{ route('users.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Data Users</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>