<div class="leftside-menu">
    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <h1>Logo</h1>
        {{-- <span class="logo-lg">
            <img src="assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm.png" alt="" height="16">
        </span> --}}
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">
        <!--- Sidemenu -->
        <ul class="side-nav">
            <li class="side-nav-title side-nav-item">Home</li>
            <li class="side-nav-item">
                <a href="{{ route('home.dashboard') }}" aria-expanded="false" aria-controls="sidebarDashboards"
                    class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Menu</li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts"
                    class="side-nav-link collapsed">
                    <i class="uil-window"></i>
                    <span> Post </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts" style="">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('home.create-new') }}">Create New</a>
                        </li>
                        <li>
                            <a href="{{ route('home.all-post') }}">All Post</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- End Sidebar -->

            <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
