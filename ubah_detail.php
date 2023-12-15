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
              <h1 class="h4 text-gray-900 mb-4">Masukkan Detail Pesanan!</h1>
            </div>
            <?php
            $r = $abc->tampilDetailPesanan($_GET['id_detail']);
            var_dump($r);
            ?>
            <form class="user" action="proses_detail_pesanan.php" method="POST">

              <div class="form-group">
                <input type="hidden" name="aksi" value="ubah_detail" />
                <input type="hidden" name="id_detail" value="<?= $r->id_detail ?>" />
              </div>

              <div class="form-group">
                <label for="id_detail">ID Detail</label>
                <input type="text" class="form-control form-control-user" id="id_detail" placeholder="ID detail"
                  name="id_detail" value="<?= $r->id_detail ?>">
              </div>

              <div class="form-group">
                <label for="jumlah_produk">Jumlah Produk</label>
                <input type="number" class="form-control form-control-user" id="jumlah_produk"
                  placeholder="Jumlah Produk" name="jumlah_produk" value="<?= $r->jumlah_produk ?>">
              </div>

              <div class="form-group">
                <label for="subtotal">Total</label>
                <input type="number" class="form-control form-control-user" id="subtotal" placeholder="subtotal"
                  name="subtotal" value="<?= $r->subtotal ?>">
              </div>


              <div class="form-group">
                <label for="metode_pembayaran">Metode Pembayaran</label>
                <select class="form-control" id="metode_pembayaran" name="metode_pembayaran">
                  <option name="cash" value="Cash">Cash</option>
                  <option name="qris" value="QRIS">QRIS</option>
                </select>
              </div>

              <div class="form-group">
                <label for="id_pesanan">ID Pesanan</label>
                <select class="form-control" id="id_pesanan" name="id_pesanan">
                  <?php
                  //Ambil data pelanggan
                  $data = $abc->tampilSemuaPesanan();

                  // Membuat opsi untuk setiap data Pelanggan
                  foreach ($data as $r) {
                    ?>
                    <option value="<?= $r->id_pesanan ?>">
                      <?= $r->id_pesanan ?>
                    </option>
                    <?php
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
                  foreach ($data as $r) {
                    echo '<option value="' . $r->id_produk . '">' . $r->nama_produk . '</option>';
                  }
                  ?>
                </select>
              </div>

              <div class="col-md-12 text-center">
                <button name="simpan" type="submit" class="btn btn-primary btn-user btn-block">
                  Simpan</button>
              </div>

            </form>

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