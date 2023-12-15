<?php
error_reporting(1);
include "Client.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>KOREAN FOOD RESTO</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kasir</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
          aria-controls="collapsePages">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="form_login.php">Login</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="pelanggan.php">
          <i class="bi bi-person-fill"></i>
          <span>Pelanggan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="produk.php">
          <i class="bi bi-card-checklist"></i>
          <span>Produk</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="pesanan.php">
          <i class="bi bi-cart-check-fill"></i>
          <span>Pesanan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="detail_pesanan.php">
          <i class="bi bi-envelope-check-fill"></i>
          <span>Detail Pesanan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>




          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>




            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <!-- Mengkoneksikan data-->
                <?php
                // include('koneksi/koneksi.php');
                
                // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                
                // if (!isset($_SESSION['username'])) {
                //     die("Anda belum login");
                // }
                
                // $id = 1;
                
                // $user = $_SESSION['id_user'];
                
                // // Query to retrieve user data
                // $query = "SELECT * FROM user WHERE id_user='$user'";
                // $result = mysqli_query($conn, $query);
                // $data = $result->fetch_array();
                
                ?>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  Login as
                </span>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <!-- <?php echo $data['nama']; ?> -->
                </span>
                <img class="img-profile rounded-circle" src="img/undraw_profile_1.svg" />
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Selamat Datang</h1>
          <p class="mb-4">
            Silahkan kelola daftar pesanan.
          </p>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="tambah_pesanan.php" class="btn btn-primary" type="button" name="tambah_pesanan_btn">Tambah
                Pesanan</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Pesanan</th>
                      <th>Nama Pelanggan</th>
                      <th>Nama Produk</th>
                      <th>Tanggal Pesanan</th>
                      <th>Jumlah</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Menampilkan data -->
                    <?php
                    $no = 1;
                    $data = $abc->tampilSemuaPesanan();
                    foreach ($data as $r) {
                      ?>
                      <tr>
                        <td>
                          <?= $no++; ?>
                        </td>
                        <td>
                          <?= $r->id_pesanan ?>
                        </td>
                        <td>
                          <?= $r->nama_depan ?>
                        </td>
                        <td>
                          <?= $r->nama_produk ?>
                        </td>
                        <td>
                          <?= $r->tanggal_pesanan ?>
                        </td>
                        <td>
                          <?= $r->jumlah ?>
                        </td>


                        <td>
                          <a href="ubah_pesanan.php?id_pesanan=<?= $r->id_pesanan ?>" class="btn btn-success btn-sm"
                            type="button" name="update_pengguna_btn">Update</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#deleteModal<?= $r->id_pesanan ?>">
                            Delete
                          </a>
                        </td>
                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal<?= $r->id_pesanan ?>" tabindex="-1" role="dialog"
                          aria-labelledby="deleteModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Data</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data ini?
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                <a class="btn btn-danger"
                                  href="proses_pesanan.php?aksi=hapus_pesanan&id_pesanan=<?= $r->id_pesanan ?>">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>

                      </tr>
                      <?php $no++;
                    }
                    unset($data, $r, $no);
                    ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">

          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>




  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>




  <!-- Script for icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</body>

</html>