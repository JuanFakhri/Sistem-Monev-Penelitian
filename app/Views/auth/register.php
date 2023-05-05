<?= $this->extend('auth/templates/index');  ?>

<?= $this->section('content');  ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>

                                </div>
                                <form action="auth/insert_user" method="POST" class="user">
                                    <?= $validate->listErrors()  ?>
                                    <div class="form-group">

                                        <div class="col-sm-20 mb-7 mb-sm-0">

                                            <label for="user">Username</label>
                                            <input type="text" name="user" id="user" class="form-control form-control-user" aria-describedby="helpId" placeholder="Username...">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control form-control-user" aria-describedby="helpId" placeholder="Email Address...">
                                        </div>
                                        <div class="form-group">

                                            <label for="pass">Password</label>
                                            <input type="password" name="pass" id="pass" class="form-control form-control-user" aria-describedby="helpId" placeholder="Password...">
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
                                    </div>
                                    <div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url("/");  ?>">Already have an account? Login!</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>