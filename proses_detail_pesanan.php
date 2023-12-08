<?php
error_reporting(1);
include "Client.php";

if ($_POST['aksi'] == 'tambah') {
    $data = array(
        "id_detail" => $_POST['id_detail'],
        "id_pesanan" => $_POST['id_pesanan'],
        "id_produk" => $_POST['id_produk'],
        "jumlah_produk" => $_POST['jumlah_produk'],
        "subtotal" => $_POST['subtotal'],
        "aksi" => $_POST["aksi"]
    );
    $abc->tambah_data_detail_pesanan($data);
    header('location:index.php?page=daftar-data');
} else if ($_POST['aksi'] == 'ubah') {
    $data = array(
        "id_detail" => $_POST['id_detail'],
        "id_pesanan" => $_POST['id_pesanan'],
        "id_produk" => $_POST['id_produk'],
        "jumlah_produk" => $_POST['jumlah_produk'],
        "subtotal" => $_POST['subtotal'],
        "aksi" => $_POST["aksi"]
    );
    $abc->ubah_data_detail_pesanan($data);
    header('location:index.php?page=daftar-data');
} else if ($_GET['aksi'] == 'hapus') {
    $data = array(
        "id_detail" => $_GET['id_detail'],
        "aksi" => $_GET["aksi"]
    );
    $abc->hapus_data_detail_pesanan($data);
    header('location:index.php?page=daftar-data');
}
unset($abc, $data);
