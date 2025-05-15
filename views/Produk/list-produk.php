<?php
require_once __DIR__ . '/../models/produk.php';

use models\produk;

$produk = produk::get();
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Header-->
    <?php include_once "./patrials/header.php" ?>
    <body class="sb-nav-fixed">
        <?php include_once './patrials/navbar.php' ?>
        <div id="layoutSidenav">
            <?php include_once './patrials/sidebar.php' ?>
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
                                List Pegawai
                            </div>
                            <div class="card-body">
                                <div class="mb-3 text-end">
                                    <a href="create-user.php" class="btn btn-success">
                                        <i class="fas fa-plus"></i>Tambah Pegawai
                                    </a>
                                </div>
                                <table id="datatablesSimple" class="table">
                                    <thead>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>ID Jenis Produk</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($produk as $index =>$produk):?>
                                            <tr>
                                                <td><?= $index + 1;?></td>
                                                <td><?= $produk['kode']?></td>
                                                <td><?= $produk['nama']?></td>
                                                <td><?= $produk['deskripsi']?></td>
                                                <td><?= $produk['harga']?></td>
                                                <td><?= $produk['stok']?></td>
                                                <td><?= $produk['jenis_produk_id']?></td>
                                                <td>
                                                    <a href="detail-produk.php?id=<?= $produk['id']?>" class="btn btn-primary">
                                                        <i class="fas fa-eye"></i>Detail
                                                    </a>

                                                    <a href="edit-produk.php?id=<?= $produk['id']?>" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>Edit
                                                    </a>

                                                    <a href="delete-produk.php?id=<?= $produk['id']?>" class="btn btn-danger">
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
                <?php include_once './template/footer.php'; ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../public/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../public/js/datatables-simple-demo.js"></script>
    </body>
</html>
