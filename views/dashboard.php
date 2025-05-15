<!DOCTYPE html>
<html lang="en">
    <!-- Header-->
    <?php include_once __DIR__ . "/template/header.php" ?>
    <body class="sb-nav-fixed">
        <?php include_once __DIR__ . "/template/navbar.php" ?>
        <div id="layoutSidenav">
            <?php include_once __DIR__ . "/template/sidebar.php"?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">MANAJEMEN KOPERASI PEGAWAI</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Dashboard
                            </div>
                            <div class="card-body">
                                <h1 style="text-align: center; font-size: 5rem; margin-bottom: 20px;">Welcome To Dashboard</h1>
                                <img src="../public/assets/img/koperasi.png" alt="Dashboard Image" style="display: block; margin: 20px auto 0; width: 300px; height: auto;" />
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Footer-->
                <?php include_once __DIR__ . "/template/footer.php" ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../public/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../public/js/datatables-simple-demo.js"></script>
    </body>
</html>
