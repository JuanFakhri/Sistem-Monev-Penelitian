<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("/dashboard");  ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url("public/img/dpm.ico");  ?>">
                </div>
                <div class="sidebar-brand-text mx-2">Monev Penelitian</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Profile
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/dashboard");  ?>">

                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Prodi/Fakultas</div>
            <!-- Nav Item - Penelitian -->

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/monev_penelitian");  ?>">
                    <i class="icon fa fa-book-reader"></i>
                    <span>Penelitian</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Menu Profile</div>
            <!-- Nav Item - Penelitian -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("/profile/" . userlogin()->id);  ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="auth/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->