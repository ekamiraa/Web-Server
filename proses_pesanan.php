<?php
error_reporting(1);
include "Client.php";

if ($_POST['aksi'] == 'tambah_pesanan') {
    $data = array(
        "id_pesanan" => $_POST['id_pesanan'],
        "id_pelanggan" => $_POST['id_pelanggan'],
        "id_produk" => $_POST['id_produk'],
        "tanggal_pesanan" => $_POST['tanggal_pesanan'],
        "jumlah" => $_POST['jumlah'],
        "aksi" => $_POST['aksi']
    );

    $abc->tambah_data_pesanan($data);
    var_dump($_POST);
    header('location:pesanan.php');
} else if ($_POST['aksi'] == 'ubah_pesanan') {
    $data = array(
        "id_pesanan" => $_POST['id_pesanan'],
        "id_pelanggan" => $_POST['id_pelanggan'],
        "id_produk" => $_POST['id_produk'],
        "tanggal_pesanan" => $_POST['tanggal_pesanan'],
        "jumlah" => $_POST['jumlah'],
        "aksi" => $_POST["aksi"]
    );
    $abc->ubah_data_pesanan($data);
    header('location:pesanan.php');
} else if ($_GET['aksi'] == 'hapus_pesanan') {
    $data = array(
        "id_pesanan" => $_GET['id_pesanan'],
        "aksi" => $_GET["aksi"]
    );
    $abc->hapus_data_pesanan($data);
    header('location:pesanan.php');
}
unset($abc, $data);
