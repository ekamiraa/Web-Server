<?php
error_reporting(1); // error ditampilkan
include "Client.php";

$no = 1;
$data_array = $abc->tampil_semua_dataPesanan();
$dtpelanggan = $abc->tampil_semua_dataPelanggan();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prafu Elektronik</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables Produk -->
            <li class="nav-item active">
                <a class="nav-link" href="view_Produk.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Produk</span></a>
            </li>

            <!-- Nav Item - Tables Kategori Produk -->
            <li class="nav-item active">
                <a class="nav-link" href="view_KategoriProduk.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Kategori Produk</span></a>
            </li>

            <!-- Nav Item - Tables Merek -->
            <li class="nav-item active">
                <a class="nav-link" href="view_Merek.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Merek</span></a>
            </li>

            <!-- Nav Item - Tables Pengguna -->
            <li class="nav-item active">
                <a class="nav-link" href="view_Pelanggan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pelanggan</span></a>
            </li>

            <!-- Nav Item - Tables Pesanan -->
            <li class="nav-item active">
                <a class="nav-link" href="view_Pesanan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pesanan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <button class="btn btn-primary mb-3" data-toggle="modal"
                                    data-target="#tambahDataModal">Tambah Data</button>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>ID Pesanan</th>
                                            <th>Tanggal Pesanan</th>
                                            <th>ID Pelanggan</th>
                                            <th>Status Pesanan</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Alamat Pengirim</th>
                                            <th>Total Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data_array = $abc->tampil_semua_dataPesanan();
                                        foreach ($data_array as $r) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $r->IDPesanan ?>
                                                </td>
                                                <td>
                                                    <?= $r->TanggalPesanan ?>
                                                </td>
                                                <td>
                                                    <?= $r->IDPelanggan ?>
                                                </td>
                                                <td>
                                                    <?= $r->StatusPesanan ?>
                                                </td>
                                                <td>
                                                    <?= $r->MetodePembayaran ?>
                                                </td>
                                                <td>
                                                    <?= $r->AlamatPengiriman ?>
                                                </td>
                                                <td>
                                                    <?= $r->TotalHarga ?>
                                                </td>
                                                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal<?= $r->IDPesanan ?>">
                                                        Edit
                                                    </button>
                                                    <div class="modal fade" id="exampleModal<?= $r->IDPesanan ?>"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editDataModalLabel">Edit
                                                                        Data Pesanan</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Isi formulir edit data di sini -->
                                                                    <form name="form" method="POST" action="proses.php">
                                                                        <input type="hidden" name="aksi"
                                                                            value="ubah_pesanan" />
                                                                        <input type="hidden" name="IDPesanan"
                                                                            value="<?= $r->IDPesanan ?>" />
                                                                        <div class="mb-3">
                                                                            <label for="IDPesanan" class="form-label">ID
                                                                                Pesanan</label>
                                                                            <input type="text" class="form-control"
                                                                                id="IDPesanan" name="IDPesanan"
                                                                                value="<?= $r->IDPesanan ?>" disabled>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="TanggalPesanan"
                                                                                class="form-label">Tanggal Pesanan</label>
                                                                            <input type="date" class="form-control"
                                                                                id="TanggalPesanan" name="TanggalPesanan"
                                                                                value="<?= $r->TanggalPesanan ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="IDPelanggan"
                                                                                class="form-label">IDPelanggan</label>
                                                                            <select class="form-control" id="IDPelanggan"
                                                                                name="IDPelanggan">
                                                                                <?php
                                                                                // Membuat opsi untuk setiap data Pelanggan
                                                                                foreach ($dtpelanggan as $pelanggan) {
                                                                                    $selected = ($pelanggan->IDPelanggan == $r->IDPelanggan) ? 'selected' : '';
                                                                                    echo '<option value="' . $pelanggan->IDPelanggan . '" ' . $selected . '>' . $pelanggan->NamaPelanggan . '</option>';
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="StatusPesanan"
                                                                                class="form-label">Status Pesanan</label>
                                                                            <select class="form-control" id="StatusPesanan"
                                                                                name="StatusPesanan">
                                                                                <option value="Dikirim" <?php echo ($r->StatusPesanan == 'Dikirim') ? 'selected' : ''; ?>>Dikirim</option>
                                                                                <option value="Menunggu Pembayaran" <?php echo ($r->StatusPesanan == 'Menunggu Pembayaran') ? 'selected' : ''; ?>>
                                                                                    Menunggu Pembayaran</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="MetodePembayaran"
                                                                                class="form-label">Metode Pembayaran</label>
                                                                            <select class="form-control"
                                                                                id="MetodePembayaran"
                                                                                name="MetodePembayaran">
                                                                                <option value="Transfer Bank" <?php echo ($r->MetodePembayaran == 'Transfer Bank') ? 'selected' : ''; ?>>Transfer Bank
                                                                                </option>
                                                                                <option value="Kartu Kredit" <?php echo ($r->MetodePembayaran == 'Kartu Kredit') ? 'selected' : ''; ?>>Kartu Kredit
                                                                                </option>
                                                                                <option value="Cash" <?php echo ($r->MetodePembayaran == 'Cash') ? 'selected' : ''; ?>>Cash</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="AlamatPengiriman"
                                                                                class="form-label">Alamat Pengirim</label>
                                                                            <input type="text" class="form-control"
                                                                                id="AlamatPengiriman"
                                                                                name="AlamatPengiriman"
                                                                                value="<?= $r->AlamatPengiriman ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="TotalHarga" class="form-label">Total
                                                                                Harga</label>
                                                                            <input type="text" class="form-control"
                                                                                id="TotalHarga" name="TotalHarga"
                                                                                value="<?= $r->TotalHarga ?>">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"
                                                                            name="aksi" value="ubah_pesanan">Submit</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="proses.php?aksi=hapus_pesanan&IDPesanan=<?= $r->IDPesanan ?>"
                                                        class="btn btn-primary"
                                                        onclick="return confirm('Apakah Anda ingin menghapus data ini?')">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php }
                                        unset($data_array, $r);
                                        ?>
                                    </tbody>
                                </table>

                                <!-- Modal Tambah Data -->
                                <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog"
                                    aria-labelledby="tambahDataModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Pesanan
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Isi formulir tambah data di sini -->
                                                <form name="form" method="POST" action="proses.php">
                                                    <input type="hidden" class="form-control" id="IDPesanan"
                                                        name="IDPesanan">
                                                    <div class="mb-3">
                                                        <label for="TanggalPesanan" class="form-label">Tanggal
                                                            Pesanan</label>
                                                        <input type="date" class="form-control" id="TanggalPesanan"
                                                            name="TanggalPesanan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="IDPelanggan" class="form-label">IDPelanggan</label>
                                                        <select class="form-control" id="IDPelanggan"
                                                            name="IDPelanggan">
                                                            <?php
                                                            // Membuat opsi untuk setiap data Pelanggan
                                                            foreach ($dtpelanggan as $r) {
                                                                echo '<option value="' . $r->IDPelanggan . '">' . $r->NamaPelanggan . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="StatusPesanan" class="form-label">Status
                                                            Pesanan</label>
                                                        <select class="form-control" id="StatusPesanan"
                                                            name="StatusPesanan">
                                                            <option value="Dikirim">Dikirim</option>
                                                            <option value="Menunggu Pembayaran">Menunggu Pembayaran
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="MetodePembayaran" class="form-label">Metode
                                                            Pembayaran</label>
                                                        <select class="form-control" id="MetodePembayaran"
                                                            name="MetodePembayaran"
                                                            aria-placeholder="Pilih Metode Pembayaran">
                                                            <option value="Transfer Bank">Transfer Bank</option>
                                                            <option value="Kartu Kredit">Kartu Kredit</option>
                                                            <option value="Cash">Cash</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="AlamatPengiriman" class="form-label">Alamat
                                                            Pengirim</label>
                                                        <input type="text" class="form-control" id="AlamatPengiriman"
                                                            name="AlamatPengiriman">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="TotalHarga" class="form-label">Total Harga</label>
                                                        <input type="text" class="form-control" id="TotalHarga"
                                                            name="TotalHarga">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="aksi"
                                                        value="tambah_pesanan">Submit</button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">

                                </div>
                                <!-- End of Modal Tambah Data -->
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
                        <span>Copyright &copy; Your Website 2020</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>