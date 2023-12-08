<?php
error_reporting(1);
include "Client.php";

if ($_POST['aksi'] == 'tambah') {
    $data = array(
        "id_pesanan" => $_POST['id_pesanan'],
        "id_pelanggan" => $_POST['id_pelanggan'],
        "id_produk" => $_POST['id_produk'],
        "tanggal_pesan" => $_POST['tanggal_pesan'],
        "jumlah" => $_POST['jumlah'],
        "aksi" => $_POST["aksi"]
    );
    $abc->tambah_data_pesanan($data);
    header('location:index.php?page=daftar-data');
} else if ($_POST['aksi'] == 'ubah') {
    $data = array(
        "id_pesanan" => $_POST['id_pesanan'],
        "id_pelanggan" => $_POST['id_pelanggan'],
        "id_produk" => $_POST['id_produk'],
        "tanggal_pesan" => $_POST['tanggal_pesan'],
        "jumlah" => $_POST['jumlah'],
        "aksi" => $_POST["aksi"]
    );
    $abc->ubah_data_pesanan($data);
    header('location:index.php?page=daftar-data');
} else if ($_GET['aksi'] == 'hapus') {
    $data = array(
        "id_pesanan" => $_GET['id_pesanan'],
        "aksi" => $_GET["aksi"]
    );
    $abc->hapus_data_pesanan($data);
    header('location:index.php?page=daftar-data');
}
unset($abc, $data);
