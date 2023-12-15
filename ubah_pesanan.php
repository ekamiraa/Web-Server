<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(1);
include "Client.php";
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin | Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <!-- Nested Row within Card Body -->

          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Silahkan Ubah Data Pesanan!</h1>
            </div>

            <?php
            $r = $abc->tampilDataPesanan($_GET['id_pesanan']);
            ?>
            <form class="user" action="proses_pesanan.php" method="POST" name="form">
              <div class="form-group">
                <div class="col-md-12">
                  <input type="hidden" name="aksi" value="ubah_pesanan" />
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="id_pesanan" placeholder="ID pesanan"
                  name="id_pesanan" value="<?= $r->id_pesanan ?>">
              </div>
              <div class="form-group">
                <label for="id_pelanggan">ID Pelanggan</label>
                <select class="form-control" id="id_pelanggan" name="id_pelanggan">
                  <?php
                  // Ambil data pelanggan
                  $data = $abc->tampilSemuaPelanggan();

                  // Membuat opsi untuk setiap data Pelanggan
                  foreach ($data as $dataPelanggan) {
                    $selected = ($dataPelanggan->id_pelanggan == $r->id_pelanggan) ? 'selected' : '';
                    echo '<option value="' . $dataPelanggan->id_pelanggan . '" ' . $selected . '>' . $dataPelanggan->nama_depan . '</option>';
                  }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label for="id_produk">ID Produk</label>
                <select class="form-control" id="id_produk" name="id_produk">
                  <?php
                  // Ambil data produk
                  $data = $abc->tampilSemuaProduk();
                  foreach ($data as $dataProduk) {
                    $selected = ($dataProduk->id_produk == $r->id_produk) ? 'selected' : '';
                    echo '<option value="' . $dataProduk->id_produk . '" ' . $selected . '>' . $dataProduk->nama_produk . '</option>';
                  }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label for="tanggal_pesanan">Tanggal Pesanan</label>
                <input type="text" class="form-control form-control-user" id="tanggal_pesanan"
                  placeholder="Tanggal Pesanan" name="tanggal_pesanan" value="<?= $r->tanggal_pesanan ?>">
              </div>

              <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" class="form-control form-control-user" id="jumlah" placeholder="Jumlah" name="jumlah"
                  value="<?= $r->jumlah ?>">
              </div>

              <div class="form-group"></div>

              <div class="col-md-12 text-center">
                <button name="simpan" type="submit" class="btn btn-primary btn-user btn-block">
                  Ubah Data</button>
              </div>
            </form>
            <?php unset($r); ?>
            <hr>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>