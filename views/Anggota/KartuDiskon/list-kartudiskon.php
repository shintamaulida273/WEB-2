<?php
require_once __DIR__ . '/../../../models/KartuDiskon.php';

use models\kartu_diskon;

$kartuDiskon = kartu_diskon::get();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once "../../template/header.php" ?>
<body class="sb-nav-fixed">
    <?php include_once "../../template/navbar.php" ?>
    <div id="layoutSidenav">
        <?php include_once "../../template/sidebar.php" ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">List Kartu Diskon</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Kartu Diskon</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Kartu Diskon
                        </div>
                        <div class="card-body">
                            <div class="mb-3 text-end">
                                <a href="create-kartudiskon.php" class="btn btn-success">
                                    <i class="fas fa-plus"></i> Tambah Kartu
                                </a>
                            </div>
                            <table id="datatablesSimple" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kartu</th>
                                        <th>Deskripsi</th>
                                        <th>Diskon (%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kartuDiskon as $i => $kartu): ?>
                                        <tr>
                                            <td><?= $i + 1 ?></td>
                                            <td><?= htmlspecialchars($kartu['nama_kartu']) ?></td>
                                            <td><?= htmlspecialchars($kartu['deskripsi']) ?></td>
                                            <td><?= htmlspecialchars($kartu['diskon']) ?>%</td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php include_once "../../template/footer.php" ?>
        </div>
    </div>
</body>
</html>
