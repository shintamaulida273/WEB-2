<?php
require_once __DIR__ . '/../../../models/KartuDiskon.php';

use models\kartu_diskon;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_kartu = $_POST['nama_kartu'];
    $deskripsi = $_POST['deskripsi'];
    $diskon = $_POST['diskon'];

    kartu_diskon::create([
        'nama_kartu' => $nama_kartu,
        'deskripsi' => $deskripsi,
        'diskon' => $diskon
    ]);

    header("Location: list-kartudiskon.php");
    exit;
}
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
                    <h1 class="mt-4">Tambah Kartu Diskon</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Kartu Diskon</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-body">
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="nama_kartu" class="form-label">Nama Kartu</label>
                                    <input type="text" class="form-control" id="nama_kartu" name="nama_kartu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="diskon" class="form-label">Diskon (%)</label>
                                    <input type="number" class="form-control" id="diskon" name="diskon" required min="1" max="100">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="list-kartudiskon.php" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include_once "../../template/footer.php" ?>
        </div>
    </div>
</body>
</html>
