<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data penelitian.xls")
?>

<html>

<body>

    <table border="1">
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
                        <?= $row['peta_jalan'];  ?>

                    </td>

                    <td class="text-center">
                        <?= $row['sesuaipetajalan'];  ?>

                    </td>
                    <td class="text-center">
                        <?= $row['evaluasi_penelitian'];  ?>

                    </td>

                    <td class="text-center">
                        <?= $row['evaluasi_penelitian_tindaklanjut'];  ?>

                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>