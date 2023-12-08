<?php
error_reporting(1);
class Client
{
    private $url;

    // function yan pertama kali di load saat class dipanggil 
    public function __construct($url)
    {
        $this->url = $url;
        unset($url);
    }

    // function untuk menghapus selain huruf dan angka
    public function filter($data)
    {
        $data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
        return $data;
        unset($data);
    }

    //PELANGGAN
    public function tampilSemuaPelanggan()
    {
        $client = curl_init($this->url . "?aksi=tampil_semua_pelanggan");
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        // mengembalikan data 
        return $data;
        // menghapus variabel dari memory 
        unset($data, $client, $response);
    }

    public function tampilDataPelanggan($id_pelanggan)
    {
        $id_pelanggan = $this->filter($id_pelanggan);
        $client = curl_init($this->url . "?aksi=tampil_pelanggan&id_pelanggan=" . $id_pelanggan); //lihat server.php
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_pelanggan, $client, $response, $data);
    }

    public function tambah_data_pelanggan($data)
    {
        $data = '{  "id_pelanggan":"' . $data['id_pelanggan'] . '",
                    "nama_depan":"' . $data['nama_depan'] . '",
                    "nama_belakang":"' . $data['nama_belakang'] . '",
                    "no_hp":"' . $data['no_hp'] . '",
                    "alamat":"' . $data['alamat'] . '",
                    "aksi":"' . $data['aksi'] . '"
                }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url . "?aksi=tambah_pelanggan");
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function ubah_data_pelanggan($data)
    {
        $data = '{  "id_pelanggan":"' . $data['id_pelanggan'] . '",
                    "nama_depan":"' . $data['nama_depan'] . '",
                    "nama_belakang":"' . $data['nama_belakang'] . '",
                    "no_hp":"' . $data['no_hp'] . '",
                    "alamat":"' . $data['alamat'] . '",
                    "aksi":"' . $data['aksi'] . '"
                }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url . "?aksi=ubah_pelanggan");
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function hapus_data_pelanggan($data)
    {
        $id_pelanggan = $this->filter($data['id_pelanggan']);
        $data = '{  "id_pelanggan":"' . $id_pelanggan . '",
                    "aksi":"' . $data['aksi'] . '"
                }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_pelanggan, $data, $c, $response);
    }


    //PRODUK
    public function tampilSemuaProduk()
    {
        $client = curl_init($this->url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        // mengembalikan data 
        return $data;
        // menghapus variabel dari memory 
        unset($data, $client, $response);
    }

    public function tampilDataProduk($id_produk)
    {
        $id_produk = $this->filter($id_produk);
        $client = curl_init($this->url . "?aksi=tampil&id_barang=" . $id_produk); //lihat server.php
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_produk, $client, $response, $data);
    }

    public function tambah_data_produk($data)
    {
        $data = '{
        "id_produk":"' . $data['id_produk'] . '",
        "nama_produk":"' . $data['nama_produk'] . '",
        "harga":"' . $data['harga'] . '",
        "desk":"' . $data['desk'] . '",
        "stok":"' . $data['stok'] . '",
        "gambar":"' . $data['gambar'] . '",
        "aksi":"' . $data['aksi'] . '"
    }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function ubah_data_produk($data)
    {
        $data = '{
            "id_produk":"' . $data['id_produk'] . '",
            "nama_produk":"' . $data['nama_produk'] . '",
            "harga":"' . $data['harga'] . '",
            "desk":"' . $data['desk'] . '",
            "stok":"' . $data['stok'] . '",
            "gambar":"' . $data['gambar'] . '",
            "aksi":"' . $data['aksi'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function hapus_data_produk($data)
    {
        $id_produk = $this->filter($data['id_produk']);
        $data = '{
            "id_produk":"' . $id_produk . '",
            "aksi":"' . $data['aksi'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_produk, $data, $c, $response);
    }


    //PESANAN
    public function tampilSemuaPesanan()
    {
        $client = curl_init($this->url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        // mengembalikan data 
        return $data;
        // menghapus variabel dari memory 
        unset($data, $client, $response);
    }

    public function tampilDataPesanan($id_pesanan)
    {
        $id_pesanan = $this->filter($id_pesanan);
        $client = curl_init($this->url . "?aksi=tampil&id_barang=" . $id_pesanan); //lihat server.php
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_pesanan, $client, $response, $data);
    }

    public function tambah_data_pesanan($data)
    {
        $data = '{
            "id_pesanan":"' . $data['id_pesanan'] . '",
            "id_pelanggan":"' . $data['id_pelanggan'] . '",
            "id_produk":"' . $data['id_produk'] . '",
            "tanggal_pesan":"' . $data['tanggal_pesan'] . '",
            "jumlah":"' . $data['jumlah'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function ubah_data_pesanan($data)
    {
        $data = '{
            "id_pesanan":"' . $data['id_pesanan'] . '",
            "id_pelanggan":"' . $data['id_pelanggan'] . '",
            "id_produk":"' . $data['id_produk'] . '",
            "tanggal_pesan":"' . $data['tanggal_pesan'] . '",
            "jumlah":"' . $data['jumlah'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function hapus_data_pesanan($data)
    {
        $id_pesanan = $this->filter($data['id_pesanan']);
        $data = '{
            "id_pesanan":"' . $id_pesanan . '",
            "aksi":"' . $data['aksi'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_pesanan, $data, $c, $response);
    }

    //DETAIL PESANAN
    public function tampilSemuaDetailPesanan()
    {
        $client = curl_init($this->url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        // mengembalikan data 
        return $data;
        // menghapus variabel dari memory 
        unset($data, $client, $response);
    }

    public function tampilDetailPesanan($id_detail)
    {
        $id_detail = $this->filter($id_detail);
        $client = curl_init($this->url . "?aksi=tampil&id_barang=" . $id_detail); //lihat server.php
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_detail, $client, $response, $data);
    }


    public function tambah_data_detail_pesanan($data)
    {
        $data = '{
            "id_detail":"' . $data['id_detail'] . '",
            "id_pesanan":"' . $data['id_pesanan'] . '",
            "id_produk":"' . $data['id_produk'] . '",
            "jumlah_produk":"' . $data['jumlah_produk'] . '",
            "subtotal":"' . $data['subtotal'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function ubah_data_detail_pesanan($data)
    {
        $data = '{
            "id_detail":"' . $data['id_detail'] . '",
            "id_pesanan":"' . $data['id_pesanan'] . '",
            "id_produk":"' . $data['id_produk'] . '",
            "jumlah_produk":"' . $data['jumlah_produk'] . '",
            "subtotal":"' . $data['subtotal'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function hapus_data_detail_pesanan($data)
    {
        $id_detail = $this->filter($data['id_detail']);
        $data = '{
            "id_detail":"' . $id_detail . '",
            "aksi":"' . $data['aksi'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_detail, $data, $c, $response);
    }


    // function yang terakhir kali di-load saat class dipanggil
    public function __destruct()
    { // hapus variable dari memory 
        unset($this->url);
    }

}

$url = 'http://192.168.137.1/korean-food-restaurant/server/server.php';
// buat objek baru dari class client
$abc = new Client($url);
?>