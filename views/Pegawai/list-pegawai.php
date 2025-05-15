<?php
require_once __DIR__ . '/../../models/Pegawai.php';

use models\pegawai;

$pegawai = pegawai::get();
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
                        <h1 class="mt-4">Pegawai</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pegawai</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List Pegawai
                            </div>
                            <div class="card-body">
                                <div class="mb-3 text-end">
                                    <a href="create-pegawai.php" class="btn btn-success">
                                        <i class="fas fa-plus"></i>Tambah Pegawai
                                    </a>
                                </div>
                                <table id="datatablesSimple" class="table">
                                    <thead>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pegawai as $index =>$row):?>
                                            <tr>
                                                <td><?= $index + 1;?></td>
                                                <td><?= $row['nip']?></td>
                                                <td><?= $row['nama']?></td>
                                                <td><?= $row['jenis_kelamin']?></td>
                                                <td><?= $row['jabatan']?></td>
                                                <td>
                                                    <a href="detail-pegawai.php?id=<?= $row['id']?>" class="btn btn-primary">
                                                        <i class="fas fa-eye"></i>Detail
                                                    </a>

                                                    <a href="edit-pegawai.php?id=<?= $row['id']?>" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>Edit
                                                    </a>

                                                    <a href="delete-pegawai.php?id=<?= $row['id']?>" class="btn btn-danger">
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
