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
        <hr class="sidebar-divider">
        <div class="sidebar-heading">Menu Profile</div>
        <!-- Nav Item - Penelitian -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url("/profile/" . userlogin()->id);  ?>">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                <span>Profile</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Logout -->
        <li class="nav-item">
            <a class="nav-link" href="auth/logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>
        <!-- Divider -->

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

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome, <?= userlogin()->username ?></span>

                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item
                            " href="<?= base_url("/profile/" . userlogin()->id);  ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">


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

                <?= session()->get('pesan');  ?>
                <div class="d-flex pl-0 mb-3">
                    <i class="icon fa fa-book-reader"></i>
                    <div>
                        <h4>Data Penelitian</h4>
                        <p class="mg-b-0">Olah Data Penelitian</p>

                    </div>
                </div>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md">

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah2">

                                    <i class="fa fa-plus"> Tambah Data</i>
                                </button>
                            </div>
                            <?php if (session()->get('message')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    Data Siswa Berhasil <strong><?= session()->getFlashdata('message');  ?></strong>
                                </div>

                                <script>
                                    $(".alert").alert();
                                </script>
                            <?php endif; ?>

                            <?php if (allow('5')) : ?>
                                <div class="col-md">
                                    <button onclick="window.print()" class="btn btn-outline-secondary float-right ml-2">
                                        <i class="fa fa-print"> Print</i>
                                    </button>
                                    <a href="<?= base_url("backend/excel");  ?>" class="btn btn-outline-success shadow float-right">Excel <i class="fa fa-file-excel"></i></a>
                                </div>

                            <?php endif; ?>


                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun Penelitian</th>
                                            <th>Judul Penelitian</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Nama Dosen</th>
                                            <th>Prodi</th>
                                            <th>Peta Jalan Penelitian</th>
                                            <th>Sesuai Jalan Penelitian</th>
                                            <th>Bukti Evaluasi Penelitian</th>
                                            <th>Tindak Lanjut Evaluasi Penelitian</th>
                                            <th>Opsi</th>
                                        </tr>

                                        </tr>
                                    </thead>
                                    <tbody><?php $i = 1;  ?>
                                        <?php foreach ($penel as $row) : ?>
                                            <tr>
                                                <td scope="row"><?= $i++;  ?></td>
                                                <td><?= $row['tahun'];  ?></td>
                                                <td><?= $row['judulpenelitian'];  ?></td>
                                                <td><?= $row['namamahasiswa'];  ?></td>
                                                <td><?= $row['namadosen'];  ?></td>

                                                <td><?= $row['prodi'];  ?></td>
                                                <td class="text-center">
                                                    <a href="<?= base_url("/view_pdf/" . $row['id']);  ?>"><i class="fa fa-file-pdf fa-2x btn-danger"> </i></a><br>
                                                    <?= $row['peta_jalan'];  ?>

                                                </td>

                                                <td class="text-center">
                                                    <a href="<?= base_url("/view_pdf_sesuaipetajalan/" . $row['id']);  ?>"><i class="fa fa-file-pdf fa-2x btn-danger"> </i></a><br>
                                                    <?= $row['sesuaipetajalan'];  ?>

                                                </td>
                                                <td class="text-center">
                                                    <a href="<?= base_url("/view_pdf_evaluasipenelitian/" . $row['id']);  ?>"><i class="fa fa-file-pdf fa-2x btn-danger"> </i></a><br>
                                                    <?= $row['evaluasi_penelitian'];  ?>

                                                </td>

                                                <td class="text-center">
                                                    <a href="<?= base_url("/view_pdf_evaluasi_penelitian_tindaklanjut/" . $row['id']);  ?>"><i class="fa fa-file-pdf fa-2x btn-danger"> </i></a><br>
                                                    <?= $row['evaluasi_penelitian_tindaklanjut'];  ?>

                                                </td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#modalUbah" class="btn btn-sm btn-warning" id='btn-panel' data-id="<?= $row['id'];  ?> " data-tahun="<?= $row['tahun'];  ?>" data-judulpenelitian="<?= $row['judulpenelitian'];  ?>" data-namamahasiswa="<?= $row['namamahasiswa'];  ?>" data-namadosen="<?= $row['namadosen'];  ?>"><i class="fas fa-edit "> Edit </i></button>
                                                    <a onclick="hapus('<?= $row['id'];  ?> /<?= $row['peta_jalan'];  ?>/<?= $row['sesuaipetajalan'];  ?>')" data-toggle="modal" data-target="#modalHapus" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"> </i>Delete</a><br>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <script>
                                        function hapus(x) {
                                            $('.modal-header').html('Hapus <?= $judul;  ?>');

                                            $('.modal-body').html('Apakah anda yakin ingin menghapus data <?= $judul;  ?> ini?');


                                            let button = '<a class="btn btn-secondary" data-dismiss="modal">No</a> <a href="backend/hapus2/' + x + '" class="btn btn-primary" >Delete</a>'

                                            $('.modal-footer').html(button);

                                        }
                                    </script>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Modal Hapus data-->
            <div class="modal fade" id="modalHapus">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Hapus <?= $judul;  ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus data ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Tabah Data-->
            <div class="modal fade" id="modalTambah2">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah <?= $judul;  ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url("backend/tambah_data2");  ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group mb-0">
                                    <label for="">Tahun</label>
                                    <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Masukan Tahun">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="">Judul Penelitian</label>
                                    <input type="text" name="judulpenelitian" id="judulpenelitian" class="form-control" placeholder="Masukan Judul Penelitian">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="">Nama Mahasiswa</label>
                                    <input type="text" name="namahasiswa" id="namahasiswa" class="form-control" placeholder="Masukan Nawama hasiswa">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="">Nama Dosen</label>
                                    <input type="text" name="namadosen" id="namadosen" class="form-control" placeholder="Masukan Nama Dosen">
                                </div>
                                <?php if (allow('1')) : ?>

                                    <div class="form-label-group">
                                        <label for="">Prodi</label>
                                        <select class="form-control" name="prodi" id="prodi">
                                            <option value="S2 Manajemen">S2 Manajemen</option>
                                            <option value="S1 Manajemen">S1 Manajemen</option>
                                            <option value="S1 Kewirausahaan">S1 Kewirausahaan</option>
                                            <option value="S1 Bisnis Digital">S1 Bisnis Digital</option>
                                            <option value="D3 Akutansi">D3 Akutansi</option>
                                        </select>
                                    </div>

                                <?php endif; ?>
                                <?php if (allow('2')) : ?>

                                    <div class="form-label-group">
                                        <label for="">Prodi</label>
                                        <select class="form-control" name="prodi" id="prodi">
                                            <option value="S1 Ekonomi Syariah">S1 Ekonomi Syariah</option>
                                            <option value="S1 Bimbingan Konseling Pendidikan Islam (BKPI)">S1 Bimbingan Konseling Pendidikan Islam (BKPI)</option>
                                            <option value="S1 Manajemen Pendidikan Islam (MPI)">S1 Manajemen Pendidikan Islam (MPI)</option>
                                        </select>
                                    </div>

                                <?php endif; ?>
                                <?php if (allow('3')) : ?>

                                    <div class="form-label-group">
                                        <label for="">Prodi</label>
                                        <select class="form-control" name="prodi" id="prodi">
                                            <option value="S1 Arsitektur">S1 Arsitektur</option>
                                            <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                            <option value="S1 Teknik Lingkungan">S1 Teknik Lingkungan</option>
                                            <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
                                            <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                                            <option value="S1 Teknik Hasil Pertanian">S1 Teknik Hasil Pertanian</option>

                                        </select>
                                    </div>

                                <?php endif; ?>

                                <?php if (allow('4')) : ?>

                                    <div class="form-label-group">
                                        <label for="">Prodi</label>
                                        <select class="form-control" name="prodi" id="prodi">
                                            <option value="S1 Pendidikan Guru Sekolah Dasar (PGSD)">S1 Pendidikan Guru Sekolah Dasar (PGSD)</option>
                                            <option value="S1 Pendidikan Guru - Pendidikan Anak Usia Dini(PGPAUD)">S1 Pendidikan Guru - Pendidikan Anak Usia Dini(PGPAUD)</option>
                                            <option value="S1 Hukum">S1 Hukum</option>
                                        </select>
                                    </div>

                                <?php endif; ?>


                                <?php if (allow('5')) : ?>

                                    <div class="form-label-group">
                                        <label for="">Prodi</label>
                                        <select class="form-control" name="prodi" id="prodi">

                                            <option value="S2 Manajemen">S2 Manajemen</option>
                                            <option value="S1 Manajemen">S1 Manajemen</option>
                                            <option value="S1 Kewirausahaan">S1 Kewirausahaan</option>
                                            <option value="S1 Bisnis Digital">S1 Bisnis Digital</option>
                                            <option value="D3 Akutansi">D3 Akutansi</option>
                                            <option value="S1 Ekonomi Syariah">S1 Ekonomi Syariah</option>
                                            <option value="S1 Bimbingan Konseling Pendidikan Islam (BKPI)">S1 Bimbingan Konseling Pendidikan Islam (BKPI)</option>
                                            <option value="S1 Manajemen Pendidikan Islam (MPI)">S1 Manajemen Pendidikan Islam (MPI)</option>
                                            <option value="S1 Arsitektur">S1 Arsitektur</option>
                                            <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                            <option value="S1 Teknik Lingkungan">S1 Teknik Lingkungan</option>
                                            <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
                                            <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                                            <option value="S1 Teknik Hasil Pertanian">S1 Teknik Hasil Pertanian</option>
                                            <option value="S1 Pendidikan Guru Sekolah Dasar (PGSD)">S1 Pendidikan Guru Sekolah Dasar (PGSD)</option>
                                            <option value="S1 Pendidikan Guru - Pendidikan Anak Usia Dini(PGPAUD)">S1 Pendidikan Guru - Pendidikan Anak Usia Dini(PGPAUD)</option>
                                            <option value="S1 Hukum">S1 Hukum</option>
                                        </select>
                                    </div>

                                <?php endif; ?>

                                <div class="form-group mb-0">
                                    <label for="">Peta Jalan Penelitian</label>
                                    <div class="custom-file">
                                        <input type="file" id="peta_jalan" name="peta_jalan">
                                        <label class="text-danger">*File tidak boleh kosong & harus format pdf</label>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label for="">Penelitian Sesuai Peta Jalan </label>
                                    <div class="custom-file">
                                        <input type="file" id="sesuaipetajalan" name="sesuaipetajalan">

                                        <label class="text-danger">*File tidak boleh kosong & harus format pdf</label>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label for="">Bukti Evaluasi Penelitian</label>
                                    <div class="custom-file">

                                        <input type="file" id="evaluasi_penelitian" name="evaluasi_penelitian">

                                        <label class="text-danger">File harus format pdf</label>

                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <label for="">Tindak Lanjut Evaluasi Penelitian</label>
                                    <div class="custom-file">

                                        <input type="file" id="evaluasi_penelitian_tindaklanjut" name="evaluasi_penelitian_tindaklanjut">

                                        <label class="text-danger">*File tidak boleh kosong & harus format pdf</label>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>


            <!-- Modal Ubah-->
            <div class="modal fade" id="modalUbah">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ubah <?= $judul;  ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="<?= base_url("backend/ubah_data2");  ?>" method="post">

                                <input type="hidden" name="id" id="id-penel">
                                <div class="form-group mb-0">
                                    <label for="">tahun</label>
                                    <input type="text" name="ubah_tahun" id="ubah_tahun" class="form-control" placeholder="Masukan Tahun" value="<?= $row['tahun'];  ?>">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="">Judul Penelitian</label>
                                    <input type="text" name="ubah_judulpenelitian" id="ubah_judulpenelitian" class="form-control" placeholder="Masukan Judul Penelitian" value="<?= $row['judulpenelitian'];  ?>">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="">Nama Mahasiswa</label>
                                    <input type="text" name="ubah_namahasiswa" id="ubah_namahasiswa" class="form-control" placeholder="Masukan Nawama hasiswa" value="<?= $row['namamahasiswa'];  ?>">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="">Nama Dosen</label>
                                    <input type="text" name="ubah_namadosen" id="ubah_namadosen" class="form-control" placeholder="Masukan Nama Dosen" value="<?= $row['namadosen'];  ?>">
                                </div>

                                <?php if (allow('1')) : ?>

                                    <div class="form-label-group">
                                        <label for="">Prodi</label>
                                        <select class="form-control" name="ubah_prodi" id="ubah_prodi">
                                            <option value="S2 Manajemen">S2 Manajemen</option>
                                            <option value="S1 Manajemen">S1 Manajemen</option>
                                            <option value="S1 Kewirausahaan">S1 Kewirausahaan</option>
                                            <option value="S1 Bisnis Digital">S1 Bisnis Digital</option>
                                            <option value="D3 Akutansi">D3 Akutansi</option>
                                        </select>
                                    </div>

                                <?php endif; ?>
                                <?php if (allow('2')) : ?>

                                    <div class="form-label-group">
                                        <label for="">Prodi</label>
                                        <select class="form-control" name="ubah_prodi" id="ubah_prodi">
                                            <option value="S1 Ekonomi Syariah">S1 Ekonomi Syariah</option>
                                            <option value="S1 Bimbingan Konseling Pendidikan Islam (BKPI)">S1 Bimbingan Konseling Pendidikan Islam (BKPI)</option>
                                            <option value="S1 Manajemen Pendidikan Islam (MPI)">S1 Manajemen Pendidikan Islam (MPI)</option>
                                        </select>
                                    </div>

                                <?php endif; ?>
                                <?php if (allow('3')) : ?>

                                    <div class="form-label-group">
                                        <label for="">Prodi</label>
                                        <select class="form-control" name="ubah_prodi" id="ubah_prodi">
                                            <option value="S1 Arsitektur">S1 Arsitektur</option>
                                            <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                            <option value="S1 Teknik Lingkungan">S1 Teknik Lingkungan</option>
                                            <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
                                            <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                                            <option value="S1 Teknik Hasil Pertanian">S1 Teknik Hasil Pertanian</option>

                                        </select>
                                    </div>

                                <?php endif; ?>

                                <?php if (allow('4')) : ?>

                                    <div class="form-label-group">
                                        <label for="">Prodi</label>
                                        <select class="form-control" name="ubah_prodi" id="ubah_prodi">
                                            <option value="S1 Pendidikan Guru Sekolah Dasar (PGSD)">S1 Pendidikan Guru Sekolah Dasar (PGSD)</option>
                                            <option value="S1 Pendidikan Guru - Pendidikan Anak Usia Dini(PGPAUD)">S1 Pendidikan Guru - Pendidikan Anak Usia Dini(PGPAUD)</option>
                                            <option value="S1 Hukum">S1 Hukum</option>
                                        </select>
                                    </div>

                                <?php endif; ?>


                                <?php if (allow('5')) : ?>

                                    <div class="form-label-group">
                                        <label for="">Prodi</label>
                                        <select class="form-control" name="ubah_prodi" id="ubah_prodi">
                                            <option value="S2 Manajemen">S2 Manajemen</option>
                                            <option value="S1 Manajemen">S1 Manajemen</option>
                                            <option value="S1 Kewirausahaan">S1 Kewirausahaan</option>
                                            <option value="S1 Bisnis Digital">S1 Bisnis Digital</option>
                                            <option value="D3 Akutansi">D3 Akutansi</option>
                                            <option value="S1 Ekonomi Syariah">S1 Ekonomi Syariah</option>
                                            <option value="S1 Bimbingan Konseling Pendidikan Islam (BKPI)">S1 Bimbingan Konseling Pendidikan Islam (BKPI)</option>
                                            <option value="S1 Manajemen Pendidikan Islam (MPI)">S1 Manajemen Pendidikan Islam (MPI)</option>
                                            <option value="S1 Arsitektur">S1 Arsitektur</option>
                                            <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                            <option value="S1 Teknik Lingkungan">S1 Teknik Lingkungan</option>
                                            <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
                                            <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                                            <option value="S1 Teknik Hasil Pertanian">S1 Teknik Hasil Pertanian</option>
                                            <option value="S1 Pendidikan Guru Sekolah Dasar (PGSD)">S1 Pendidikan Guru Sekolah Dasar (PGSD)</option>
                                            <option value="S1 Pendidikan Guru - Pendidikan Anak Usia Dini(PGPAUD)">S1 Pendidikan Guru - Pendidikan Anak Usia Dini(PGPAUD)</option>
                                            <option value="S1 Hukum">S1 Hukum</option>
                                        </select>
                                    </div>

                                <?php endif; ?>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>



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

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="auth/logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection();  ?>