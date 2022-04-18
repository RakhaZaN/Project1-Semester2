<?php
$page = 'Kalkulator Sehat';

require_once './class/Pasien.php';
require_once './class/BMI.php';
require_once './class/BMIPasien.php';

$pasien = [
    new Pasien(1, 'P001', 'Ahmad', 'L', 'Jakarta', '2002-12-31'),
    new Pasien(2, 'P002', 'Rina', 'P', 'Bandung', '2000-03-12'),
    new Pasien(3, 'P003', 'Lutfi', 'L', 'Jakarta', '2001-09-20'),
];

$bim = [
    new BMI(69.8, 169),
    new BMI(55.3, 165),
    new BMI(45.2, 171),
];

$data = [
    new BMIPasien(1, $bim[0], '2022-01-10', $pasien[0]),
    new BMIPasien(2, $bim[1], '2022-01-10', $pasien[1]),
    new BMIPasien(3, $bim[2], '2022-01-10', $pasien[2]),
];

if(isset($_POST['submit'])) {
  $nPasien = new Pasien(4, 'P004', $_POST['nama'], $_POST['gender'], $_POST['tmp_lahir'], $_POST['tgl_lahir']);
  $nBmi = new BMI($_POST['berat'], $_POST['tinggi']);
  $data[] = new BMIPasien(4, $nBmi, date('Y-m-d'), $nPasien);
}

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
                <li class="breadcrumb-item active"><?= $page; ?></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Table data BMI Pasien -->
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title">BMI Pasien</h3>
            </div>
            <div class="card-body p-0 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px;">ID</th>
                            <th>Tanggal Periksa</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Berat (kg)</th>
                            <th>Tinggi (cm)</th>
                            <th>Nilai BMI</th>
                            <th>Status BMI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $dt) { ?>
                        <tr>
                            <td><?= $dt->id ?></td>
                            <td><?= $dt->tanggal ?></td>
                            <td><?= $dt->pasien->kode ?></td>
                            <td><?= $dt->pasien->nama ?></td>
                            <td><?= $dt->pasien->gender ?></td>
                            <td><?= $dt->bmi->berat ?></td>
                            <td><?= $dt->bmi->tinggi ?></td>
                            <td><?= $dt->bmi->nilai() ?></td>
                            <td><?= $dt->bmi->status() ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <center class=" mt-5">
          <a href="add.php" class="btn btn-success">Add New</a>
        </center>

        <!-- Default box -->
        <!-- <div class="card">
          <div class="card-header">
            <h3 class="card-title">Add New</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form action="" method="post" class="form-horizontal">
            <div class="card-body">

            <div class="form-group row">
              
            </div>
                
            </div>
          </form> -->
          <!-- /.card-body -->
          <!-- <div class="card-footer">
            Footer
          </div> -->
          <!-- /.card-footer-->
        <!-- </div> -->
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php include_once './layout/footer.php'; ?>
<?php include_once './layout/jslib.php'; ?>

<!-- On page JS -->
<script></script>

<?php include_once './layout/bottom.php'; ?>