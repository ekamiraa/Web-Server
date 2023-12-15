<?php
error_reporting(1);
include "Database.php";
$abc = new Database();
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    exit(0);
}
$postdata = file_get_contents("php://input");

// function untuk menghapus selain huruf dan angka
function filter($data)
{
    $data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
    return $data;
    unset($data);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode($postdata);
    //Tabel Pelanggan
    $id_pelanggan = $data->id_pelanggan;
    $nama_depan = $data->nama_depan;
    $nama_belakang = $data->nama_belakang;
    $no_hp = $data->no_hp;
    $alamat = $data->alamat;
    $aksi = $data->aksi;

    //Tabel Produk
    $id_produk = $data->id_produk;
    $nama_produk = $data->nama_produk;
    $harga = $data->harga;
    $desk = $data->desk;
    $stok = $data->stok;
    $images = $data->images;
    $aksi = $data->aksi;

    //Tabel Pesanan
    $id_pesanan = $data->id_pesanan;
    $id_pelanggan = $data->id_pelanggan;
    $id_produk = $data->id_produk;
    $tanggal_pesanan = $data->tanggal_pesanan;
    $jumlah = $data->jumlah;
    $aksi = $data->aksi;

    //Tabel Detail
    $id_detail = $data->id_detail;
    $id_pesanan = $data->id_pesanan;
    $id_produk = $data->id_produk;
    $jumlah_produk = $data->jumlah_produk;
    $subtotal = $data->subtotal;
    $metode_pembayaran = $data->metode_pembayaran;
    $aksi = $data->aksi;


    //Tabel Pelanggan
    if ($aksi == 'tambah') {
        $data2 = array(
            'id_pelanggan' => $id_pelanggan,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
        );
        $abc->tambah_pelanggan($data2);
    } elseif ($aksi == 'ubah') {
        $data2 = array(
            'id_pelanggan' => $id_pelanggan,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
        );
        $abc->ubah_pelanggan($data2);
    } elseif ($aksi == 'hapus') {
        $abc->hapus_pelanggan($id_pelanggan);
    }
    
    // Tabel Produk
    elseif ($aksi == 'tambah_produk') {
        $data2 = array(
            'id_produk' => $id_produk,
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'desk' => $desk,
            'stok' => $stok,
            'images' => $images,
        );
        $abc->tambah_produk($data2);
    } elseif ($aksi == 'ubah_produk') {
        $data2 = array(
            'id_produk' => $id_produk,
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'desk' => $desk,
            'stok' => $stok,
            'images' => $images,
        );
        $abc->ubah_produk($data2);
    } elseif ($aksi == 'hapus_produk') {
        $abc->hapus_produk($id_produk);
    }

    //Tabel Pesanan
    elseif ($aksi == 'tambah_pesanan') {
        $data2 = array(
            'id_pesanan' => $id_pesanan,
            'id_pelanggan' => $id_pelanggan,
            'id_produk' => $id_produk,
            'tanggal_pesanan' => $tanggal_pesanan,
            'jumlah' => $jumlah,
        );
        $abc->tambah_pesanan($data2);
    } elseif ($aksi == 'ubah_pesanan') {
        $data2 = array(
            'id_pesanan' => $id_pesanan,
            'id_pelanggan' => $id_pelanggan,
            'id_produk' => $id_produk,
            'tanggal_pesanan' => $tanggal_pesanan,
            'jumlah' => $jumlah,
        );
        $abc->ubah_pesanan($data2);
    } elseif ($aksi == 'hapus_pesanan') {
        $abc->hapus_pesanan($id_pesanan);
    }

    //Tabel Detail
    elseif ($aksi == 'tambah_detail') {
        $data2 = array(
            'id_detail' => $id_detail,
            'id_pesanan' => $id_pesanan,
            'id_produk' => $id_produk,
            'jumlah_produk' => $jumlah_produk,
            'metode_pembayaran' => $metode_pembayaran,
            'subtotal' => $subtotal,
        );
        $abc->tambah_detail_pesanan($data2);
    } elseif ($aksi == 'ubah_detail') {
        $data2 = array(
            'id_detail' => $id_detail,
            'id_pesanan' => $id_pesanan,
            'id_produk' => $id_produk,
            'jumlah_produk' => $jumlah_produk,
            'metode_pembayaran' => $metode_pembayaran,
            'subtotal' => $subtotal,
        );
        $abc->ubah_detail_pesanan($data2);
    } elseif ($aksi == 'hapus_detail') {
        $abc->hapus_detail_pesanan($id_detail);
    }

    // hapus variable dari memory
    unset($postdata, $data, $data2, $id_pelanggan, $nama_depan, $nama_belakang, $no_hp, $alamat,$id_produk, $nama_produk, $harga, $desk, $stok, $images,$id_pesanan, $id_pelanggan, $id_produk, $tanggal_pesanan, $jumlah,$metode_pembayaran, $id_detail, $id_pesanan, $id_produk, $jumlah_produk, $subtotal, $aksi, $abc);
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //Tabel Pelanggan
    if (($_GET['aksi'] == 'tampil_pelanggan') and (isset($_GET['id_pelanggan']))) {
        $id_pelanggan = filter($_GET['id_pelanggan']);
        $data = $abc->tampil_pelanggan($id_pelanggan);
        echo json_encode($data);
    } elseif ($_GET['aksi'] == 'tampil_semua_pelanggan') //menampilkan semua data 
	{
        $data = $abc->tampil_semua_pelanggan();
        echo json_encode($data);

        // Tabel Produk
	} elseif (($_GET['aksi'] == 'tampil_produk') and (isset($_GET['id_produk']))) {
        $id_produk = filter($_GET['id_produk']);
        $data = $abc->tampil_produk($id_produk);
        echo json_encode($data);
    } elseif ($_GET['aksi'] == 'tampil_semua_produk') //menampilkan semua data 
	{
        $data = $abc->tampil_semua_produk();
        echo json_encode($data);

        // Tampil Pesanan
	} elseif (($_GET['aksi'] == 'tampil_pesanan') and (isset($_GET['id_pesanan']))) {
        $id_pesanan = filter($_GET['id_pesanan']);
        $data = $abc->tampil_pesanan($id_pesanan);
        echo json_encode($data);
    } elseif ($_GET['aksi'] == 'tampil_semua_pesanan') //menampilkan semua data 
	{
        $data = $abc->tampil_semua_pesanan();
        echo json_encode($data);

        // Tampil Detail
	} elseif (($_GET['aksi'] == 'tampil_detail') and (isset($_GET['id_detail']))) {
        $id_detail = filter($_GET['id_detail']);
        $data = $abc->tampil_detail_pesanan_by_id($id_detail);
        echo json_encode($data);
    } elseif ($_GET['aksi'] == 'tampil_detail_semua') //menampilkan semua data 
	{
        $data = $abc->tampil_semua_detail();
        echo json_encode($data);
    }
}