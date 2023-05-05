<?= $this->extend('auth/templates/index');  ?>

<?= $this->section('content');  ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card o-hidden border-8 shadow-lg my-5">
                <div class="card-body">
                    <div class="row">

                        <form action="auth/get_login" method="POST">
                            <!-- Nested Row within Card Body -->
                            <div class=" col-lg">
                                <div class="p-4">

                                    <div class="card-header">
                                        <h2 class="text-center font-gray-light my-6">Sistem Monitoring dan Evaluasi Penelitian</h2>
                                    </div>
                                    <div class="card-center">
                                        <h4 class="text-center text-gray-900 mb-4">Silahkan Login Terlebih Dahulu</h4>
                                    </div>
                                    <form action="" method="POST" class="user">
                                        <?= session()->get('pesan');  ?>
                                        <div class="form-group">
                                            <input type="text" name="username" id="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password...">
                                        </div>

                                        <div class="form-label-group">
                                            <select class="form-control" name="akses" id="akses">
                                                <option value="1">Fakultas Ekonomi dan Bisnis</option>
                                                <option value="2">Fakultas Agama Islam</option>
                                                <option value="3">Fakultas Teknik</option>
                                                <option value="4">Fakultas Ilmu Pendidikan dan Humaniora</option>
                                                <option value="5">Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">login</button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register">Create an Account!</a>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection();  ?>