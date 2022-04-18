<?php
$page = 'Pasien Baru';
?>
<?php include_once './layout/top.php'; ?>
<?php include_once './layout/navbar.php'; ?> 
<?php include_once './layout/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1><?= $page; ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="bim.php">Kalkulator Sehat</a></li>
            <li class="breadcrumb-item active"><?= $page; ?></li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="bim.php" method="post">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pasien</h3>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <label for="" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="L" checked>
                            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="P">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <label for="tmp_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" required>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <label for="tinggi" class="col-sm-2 col-form-label">Tinggi</label>
                        <div class="col-sm-4 input-group">
                            <input type="number" class="form-control" name="tinggi" id="tinggi" value="0" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                        <div class="col-sm-4 input-group">
                            <input type="number" class="form-control" name="berat" id="berat" value="0" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-6 text-right">
                            <button type="submit" name="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once './layout/footer.php'; ?>
<?php include_once './layout/jslib.php'; ?>

<!-- On page JS -->
<script></script>

<?php include_once './layout/bottom.php'; ?>