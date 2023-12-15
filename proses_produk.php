<?php
error_reporting(1);
include "Client.php";

if ($_POST['aksi'] == 'tambah_produk') {
    $data = array(
        "id_produk" => $_POST['id_produk'],
        "nama_produk" => $_POST['nama_produk'],
        "harga" => $_POST['harga'],
        "desk" => $_POST['desk'],
        "stok" => $_POST['stok'],
        "images" => $_POST['images'],
        "aksi" => $_POST["aksi"]
    );
    $abc->tambah_data_produk($data);
    //var_dump($_POST);
    header('location:produk.php');
} else if ($_POST['aksi'] == 'ubah_produk') {
    $data = array(
        "id_produk" => $_POST['id_produk'],
        "nama_produk" => $_POST['nama_produk'],
        "harga" => $_POST['harga'],
        "desk" => $_POST['desk'],
        "stok" => $_POST['stok'],
        "images" => $_POST['images'],
        "aksi" => $_POST["aksi"]
    );
    $abc->ubah_data_produk($data);
    var_dump($_POST);
    header('location:produk.php');
} else if ($_GET['aksi'] == 'hapus_produk') {
    $data = array(
        "id_produk" => $_GET['id_produk'],
        "aksi" => $_GET["aksi"]
    );
    $abc->hapus_data_produk($data);
    header('location:produk.php');
}
unset($abc, $data);
