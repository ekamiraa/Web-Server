<?php
error_reporting(1);
include "Client.php";

if ($_POST['aksi'] == 'tambah') {
    $data = array(
        "id_produk" => $_POST['id_produk'],
        "nama_produk" => $_POST['nama_produk'],
        "harga" => $_POST['harga'],
        "desk" => $_POST['desk'],
        "stok" => $_POST['stok'],
        "gambar" => $_POST['gambar'],
        "aksi" => $_POST["aksi"]
    );
    $abc->tambah_data_produk($data);
    header('location:index.php?page=daftar-data');
} else if ($_POST['aksi'] == 'ubah') {
    $data = array(
        "id_produk" => $_POST['id_produk'],
        "nama_produk" => $_POST['nama_produk'],
        "harga" => $_POST['harga'],
        "desk" => $_POST['desk'],
        "stok" => $_POST['stok'],
        "gambar" => $_POST['gambar'],
        "aksi" => $_POST["aksi"]
    );
    $abc->ubah_data_produk($data);
    header('location:index.php?page=daftar-data');
} else if ($_GET['aksi'] == 'hapus') {
    $data = array(
        "id_produk" => $_GET['id_produk'],
        "aksi" => $_GET["aksi"]
    );
    $abc->hapus_data_produk($data);
    header('location:index.php?page=daftar-data');
}
unset($abc, $data);
