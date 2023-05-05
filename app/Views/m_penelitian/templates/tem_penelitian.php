<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul;  ?></title>

    <!-- Custom fonts for this template -->
    <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url("public");  ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url("public");  ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        @media print {

            .navbar-nav,
            .btn,
            .mg-b-0,

            th:nth-child(6),
            td:nth-child(6),
            th:nth-child(7),
            td:nth-child(7),
            th:nth-child(8),
            td:nth-child(8),
            th:nth-child(9),
            td:nth-child(9),
            th:nth-child(10),
            td:nth-child(10),
            th:nth-child(11),
            td:nth-child(11),
            footer,
            a#debug-icon-link {
                display: none;
            }
        }
    </style>
</head>

<body id="page-top">

    <?= $this->renderSection("content_penelitian");  ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url("public");  ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url("public");  ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url("public");  ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url("public");  ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url("public");  ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url("public");  ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url("public");  ?>/js/demo/datatables-demo.js"></script>

    <script src="<?= base_url("public");  ?>/js/script2.js"></script>


</body>

</html>