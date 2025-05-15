<?php
require_once __DIR__ . '/../models/Pesanan.php';

use models\pesanan;

if (isset($_POST['submit'])) {
    $data = [
        'id' => $_POST['id'],
        'status_aktif' => $_POST['status_aktif'],
        'pegawai_id' => $_POST['pegawai_id'],
        'kartu_diskon_id' => $_POST['kartu_diskon_id'],
    ];

    pesanan::create($data);
    header("Location: list-pesanan.php");
    exit;
    
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Header-->
<?php include_once "../template/header.php" ?>

<body class="sb-nav-fixed">
    <!-- Navbar-->
    <?php include_once "../template/navbar.php" ?>
    
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Main Menu</div>
                        <a class="nav-link" href="../pesanan/list-pesanan.php">
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
                    <h1 class="mt-4">Tambah Pesanan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="../pesanan/list-pesanan.php">Pesanan</a></li>
                        <li class="breadcrumb-item active">Tambah Pesanan</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tambah Pesanan
                        </div>
                        <div class="card-body">
                            <form action="../Pesanan/create-pesanan.php" method="POST">
                                <div class="mb-3">
                                    <label for="id" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="id" name="id" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="text" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                                <div class="mb-3">
                                    <label for="diskon" class="form-label">Diskon</label>
                                    <input type="text" class="form-control" id="diskon" name="diskon" required>
                                </div>
                                <div class="mb-3">
                                    <label for="status_bayar" class="form-label">Status Bayar</label>
                                    <input type="text" class="form-control" id="status_bayar" name="status_bayar" required>
                                </div>
                                <div class="mb-3">
                                    <label for="anggota_id" class="form-label">ID Anggota</label>
                                    <input type="text" class="form-control" id="anggota_id" name="anggota_id" required>
                                </div>
                                <a href="../Pesanan/list-pesanan.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Back</a>
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