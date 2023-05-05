<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <?= session()->get('pesan');  ?>
    <!-- Content Row -->
    <div class="row">
        <!-- Pengguna Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="card-body">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengguna
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="card-body">
                                    <?php

                                    function counUser($table)
                                    {
                                        $db = \Config\Database::connect();
                                        return $db->table($table)->countAllResults();
                                    } ?>
                                    <?= counUser('user')  ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Penelitian Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="card-body">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Penelitian
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="card-body">
                                    <?php

                                    function counData($table)
                                    {
                                        $db = \Config\Database::connect();
                                        return $db->table($table)->countAllResults();
                                    } ?>
                                    <?= counData('data_penelitian')  ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->

    <div class="row">

        < <!-- Area Chart -->
            <div class="col-xl-8 col-lg-8">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Penelitian Pertahun</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <?php
                        foreach ($data_penelitian as $key => $value) {
                            $jumlah[] = $value['jumlah'];
                        }
                        foreach ($data_penelitian_d as  $key => $value) {
                            $tahun[] = $value['tahun'];
                        }
                        ?>
                        <canvas id="myChart_Mahasiswa" width="100" height="30"></canvas>
                        <script>
                            const ctx = document.getElementById('myChart_Mahasiswa');
                            const myChart = new Chart(ctx, {
                                type: 'pie',
                                data: {
                                    labels: <?php echo json_encode($tahun) ?>,
                                    datasets: [{

                                        data: <?php echo json_encode($jumlah) ?>,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>

    </div>



</div>