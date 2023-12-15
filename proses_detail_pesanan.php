<?php
error_reporting(1);
include "Client.php";

if ($_POST['aksi'] == 'tambah_detail') {
    $data = array(
        "id_detail" => $_POST['id_detail'],
        "id_pesanan" => $_POST['id_pesanan'],
        "id_produk" => $_POST['id_produk'],
        "jumlah_produk" => $_POST['jumlah_produk'],
        "metode_pembayaran" => $_POST['metode_pembayaran'],
        "subtotal" => $_POST['subtotal'],
        "aksi" => $_POST["aksi"]
    );
    $abc->tambah_data_detail_pesanan($data);
    header('location:detail_pesanan.php');
} else if ($_POST['aksi'] == 'ubah_detail') {
    $data = array(
        "id_detail" => $_POST['id_detail'],
        "id_pesanan" => $_POST['id_pesanan'],
        "id_produk" => $_POST['id_produk'],
        "jumlah_produk" => $_POST['jumlah_produk'],
        "metode_pembayaran" => $_POST['metode_pembayaran'],
        "subtotal" => $_POST['subtotal'],
        "aksi" => $_POST["aksi"]
    );
    $abc->ubah_detail_pesanan($data);

    // die();
    header('location:detail_pesanan.php');
} else if ($_GET['aksi'] == 'hapus_detail') {
    $data = array(
        "id_detail" => $_GET['id_detail'],
        "aksi" => $_GET["aksi"]
    );
    $abc->hapus_data_detail_pesanan($data);
    header('location:detail_pesanan.php');
}
unset($abc, $data);
