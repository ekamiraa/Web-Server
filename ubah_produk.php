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
              <h1 class="h4 text-gray-900 mb-4">Silahkan Ubah Data Pelanggan!</h1>
            </div>

            <?php
            $r = $abc->tampilDataProduk($_GET['id_produk']);
            ?>
            <form class="user" action="proses_produk.php" method="POST" name="form">
              <div class="form-group">
                <div class="col-md-12">
                  <input type="hidden" name="aksi" value="ubah_produk" />
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="id_produk" placeholder="ID Produk"
                  name="id_produk" value="<?= $r->id_produk ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="nama_produk" placeholder="Nama Produk"
                  name="nama_produk" value="<?= $r->nama_produk ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="desk" placeholder="Deskripsi" name="desk"
                  value="<?= $r->desk ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="stok" placeholder="stok" name="stok"
                  value="<?= $r->stok ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="harga" placeholder="harga" name="harga"
                  value="<?= $r->harga ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="images" placeholder="images" name="images"
                  value="<?= $r->images ?>">
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