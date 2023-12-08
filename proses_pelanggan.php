<?php
error_reporting(1);
include "Client.php";

if ($_POST['aksi'] == 'tambah') {
    $data = array(
        "id_pelanggan" => $_POST['id_pelanggan'],
        "nama_depan" => $_POST['nama_depan'],
        "nama_belakang" => $_POST['nama_belakang'],
        "no_hp" => $_POST['no_hp'],
        "alamat" => $_POST['alamat'],
        "aksi" => $_POST["aksi"]
    );
    $abc->tambah_data_pelanggan($data);
    header('location:pelanggan.php');
} else if ($_POST['aksi'] == 'ubah') {
    $data = array(
        "id_pelanggan" => $_POST['id_pelanggan'],
        "nama_depan" => $_POST['nama_depan'],
        "nama_belakang" => $_POST['nama_belakang'],
        "no_hp" => $_POST['no_hp'],
        "alamat" => $_POST['alamat'],
        "aksi" => $_POST["aksi"]
    );
    $abc->ubah_data_pelanggan($data);
    header('location:pelanggan.php');
} else if ($_GET['aksi'] == 'hapus') {
    $data = array(
        "id_pelanggan" => $_GET['id_pelanggan'],
        "aksi" => $_GET["aksi"]
    );
    $abc->hapus_data_pelanggan($data);
    header('location:pelanggan.php');
}
unset($abc, $data);
