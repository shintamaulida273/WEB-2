<?php
require_once __DIR__ . '/../../models/Anggota.php';

use models\anggota;

$anggota = anggota::get();
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Header-->
    <?php include_once "../template/header.php" ?>
    <body class="sb-nav-fixed">
        <?php include_once '../template/navbar.php' ?>
        <div id="layoutSidenav">
            <?php include_once '../template/sidebar.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Anggota</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Anggota</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List Anggota
                            </div>
                            <div class="card-body">
                                <div class="mb-3 text-end">
                                    <a href="../Anggota/create-anggota.php" class="btn btn-success">
                                        <i class="fas fa-plus"></i>Tambah Anggota
                                    </a>
                                </div>
                                <table id="datatablesSimple" class="table">
                                    <thead>
                                        <th>No</th>
                                        <th>Status Aktif</th>
                                        <th>ID Pegawai</th>
                                        <th>ID Kartu Diskon</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($anggota as $index =>$anggota):?>
                                            <tr>
                                                <td><?= $index + 1;?></td>
                                                <td><?= $anggota['id']?></td>
                                                <td><?= $anggota['status_aktif']?></td>
                                                <td><?= $anggota['pegawai_id']?></td>
                                                <td><?= $anggota['kartu_diskon_id']?></td>
                                                <td>
                                                    <a href="detail-anggota.php>id=<?= $anggota['id']?>" class="btn btn-primary">
                                                        <i class="fas fa-eye"></i>Detail
                                                    </a>

                                                    <a href="edit-anggota.php>id=<?= $anggota['id']?>" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>Edit
                                                    </a>

                                                    <a href="delete-anggota.php>id=<?= $anggota['id']?>" class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once '../template/footer.php'; ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../public/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../public/js/datatables-simple-demo.js"></script>
    </body>
</html>
