<?= $this->extend('m_penelitian/templates/tem_penelitian');  ?>

<?= $this->section('content_penelitian');  ?>
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
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <form class="form-inline">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </form>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>


                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg justify-content-x">
                        <?= session()->get('pesan');  ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?php
                        if (session()->get('err')) {
                            echo "<div class='alert alert-danger' role='alert'>" . session()->get('err') . "</div>";
                        }
                        ?>
                    </div>
                </div>
                <!-- Page Heading -->
                <div class="d-flex pl-0 mb-3">
                    <i class="icon fa fa-book-reader"></i>
                    <div>
                        <h4>Profile</h4>
                        <p class="mg-b-0">Data Profile</p>

                    </div>
                </div>
                <!-- DataTales Example -->
                <div class="col-md-8">
                    <div class="card body">
                        <p class="card-title">Username&nbsp; : <?= userlogin()->username ?></p>
                        <p class="card-title">Email&emsp;&emsp;&nbsp; : <?= userlogin()->email ?></hp>
                    </div>
                    <form action=""></form>
                </div>

                <form action="<?= base_url("auth/ubah_profile/" . userlogin()->id);  ?>" method="POST">
                    <br>
                    <div class="form-group">

                        <label for="pass">Ubah Password</label>
                        <input type="password" name="pass" id="pass" class="form-control form-control-user" aria-describedby="helpId" placeholder="Masukan Password Baru">
                    </div>
                    <div class="form-group">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
                    <label class="text-danger">#Jika click tombol ubah maka data berhasll diubah dan kembali kemenu login</label>

                </form>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright <?= date('Y');  ?>&copy; Monitoring dan Evaluasi Penelitian</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<?= $this->endSection();  ?>