<?php
require_once __DIR__ . '/../models/produk.php';

use models\produk;

if (isset($_POST['submit'])) {
    $data = [
        'id' => $_POST['id'],
        'kode' => $_POST['kode'],
        'nama' => $_POST['nama'],
        'deskripsi' => $_POST['deskripsi'],
        'harga' => $_POST['harga'],
        'stok' => $_POST['stok'],
        'jenis_produk_id' => $_POST['jenis_produk_id'],
    ];

    produk::create($data);
    header("Location: list-produk.php");
    exit;
    
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Header-->
<?php include_once "./template/header.php" ?>

<body class="sb-nav-fixed">
    <!-- Navbar-->
    <?php include_once "./template/navbar.php" ?>
    
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Main Menu</div>
                        <a class="nav-link" href="list-produk.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            MANAJEMEN KOPERASI PEGAWAI
                        </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Shinta Maulida
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tambah Produk</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="list-produk.php">Produk</a></li>
                        <li class="breadcrumb-item active">Tambah Produk</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tambah Produk
                        </div>
                        <div class="card-body">
                            <form action="../Produk/create-produk.php" method="POST">
                                <div class="mb-3">
                                    <label for="id" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="id" name="id" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kode" class="form-label">Kode</label>
                                    <input type="text" class="form-control" id="kode" name="kode" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input type="text" class="form-control" id="stok" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_produk_id" class="form-label">ID Jenis Produk</label>
                                    <input type="text" class="form-control" id="jenis_produk_id" name="jenis_produk_id" required>
                                </div>
                                <a href="../Produk/list-produk.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Back</a>
                                <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-save"></i>Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Footer-->
            <?php include_once "../template/footer.php" ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../public/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../public/js/datatables-simple-demo.js"></script>
</body>

</html>