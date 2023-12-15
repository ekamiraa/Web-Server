<?php
class Database
{
    private $host = "localhost";
    private $dbname = "resto";
    private $user = "root";
    private $password = "";
    private $port = "3306";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port; dbname=$this->dbname; charset=utf8", $this->user, $this->password);
        } catch (PDOException $e) {
            echo "Koneksi gagal";
        }
    }

    // Tabel produk
    public function tampil_semua_produk()
    {
        $query = $this->conn->prepare("SELECT id_produk, nama_produk, harga, desk, stok, images FROM produk ORDER BY id_produk");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $data;
    }

    public function tampil_produk($id_produk)
    {
        $query = $this->conn->prepare("SELECT id_produk, nama_produk, harga, desk, stok, images FROM produk WHERE id_produk=?");
        $query->execute(array($id_produk));
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $data;
    }

    public function tambah_produk($data)
    {
        $query = $this->conn->prepare("INSERT IGNORE INTO produk (id_produk, nama_produk, harga, desk, stok, images) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute(array($data['id_produk'], $data['nama_produk'], $data['harga'], $data['desk'], $data['stok'], $data['images']));
        $query->closeCursor();
    }

    public function ubah_produk($data)
    {
        $query = $this->conn->prepare("UPDATE produk SET nama_produk=?, harga=?, desk=?, stok=?, images=? WHERE id_produk=?");
        $query->execute(array($data['nama_produk'], $data['harga'], $data['desk'], $data['stok'], $data['images'], $data['id_produk']));
        $query->closeCursor();
    }

    public function hapus_produk($id_produk)
    {
        $query = $this->conn->prepare("DELETE FROM produk WHERE id_produk=?");
        $query->execute(array($id_produk));
        $query->closeCursor();
    }

    // Tabel pelanggan

    public function tampil_semua_pelanggan()
    {
        $query = $this->conn->prepare("SELECT id_pelanggan, nama_depan, nama_belakang, no_hp, alamat FROM pelanggan ORDER BY id_pelanggan");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $data;
    }

    public function tampil_pelanggan($id_pelanggan)
    {
        $query = $this->conn->prepare("SELECT id_pelanggan, nama_depan, nama_belakang, no_hp, alamat FROM pelanggan WHERE id_pelanggan=?");
        $query->execute(array($id_pelanggan));
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $data;
    }

    public function tambah_pelanggan($data)
    {
        $query = $this->conn->prepare("INSERT IGNORE INTO pelanggan (id_pelanggan, nama_depan, nama_belakang, no_hp, alamat) VALUES (?, ?, ?, ?, ?)");
        $query->execute(array($data['id_pelanggan'], $data['nama_depan'], $data['nama_belakang'], $data['no_hp'], $data['alamat']));
        $query->closeCursor();
    }

    public function ubah_pelanggan($data)
    {
        $query = $this->conn->prepare("UPDATE pelanggan SET nama_depan=?, nama_belakang=?, no_hp=?, alamat=? WHERE id_pelanggan=?");
        $query->execute(array($data['nama_depan'], $data['nama_belakang'], $data['no_hp'], $data['alamat'], $data['id_pelanggan']));
        $query->closeCursor();
    }

    public function hapus_pelanggan($id_pelanggan)
    {
        $query = $this->conn->prepare("DELETE FROM pelanggan WHERE id_pelanggan=?");
        $query->execute(array($id_pelanggan));
        $query->closeCursor();
    }

    // Tabel pesanan

    // public function tampil_semua_pesanan()
    // {
    //     $query = $this->conn->prepare("SELECT id_pesanan, id_pelanggan, id_produk, tanggal_pesanan, jumlah FROM pesanan ORDER BY id_pesanan");
    //     $query->execute();
    //     $data = $query->fetchAll(PDO::FETCH_ASSOC);
    //     $query->closeCursor();
    //     return $data;
    // }

    
    // public function tampil_semua_pesanan()
	// {
	// 	$query = $this->conn->prepare("SELECT pesanan.id_pesanan, pelanggan.nama_depan, produk.nama_produk, pesanan.tanggal_pesanan, pesanan.jumlah FROM pesanan
	// 	JOIN produk ON produk.id_produk = pesanan.id_produk
	// 	JOIN pelanggan ON pelanggan.id_pelanggan = pesanan.id_pelanggan
	// 	ORDER BY pesanan.id_pesanan DESC
	// 	;");
	// 	$query->execute();
	// 	// mengambil banyak data dengan fetchAll	
	// 	$query->closeCursor();
	// 	$data = $query->fetchAll(PDO::FETCH_ASSOC);
	// 	// mengembalikan data	
	// 	return $data;
	// 	// hapus variable dari memory	
	// 	unset($data);
	// }

    public function tampil_semua_pesanan()
    {
        $query = $this->conn->prepare("select id_pesanan, nama_depan, nama_produk, tanggal_pesanan, jumlah from pesanan,produk, pelanggan where pesanan.id_pelanggan = pelanggan.id_pelanggan and pesanan.id_produk = produk.id_produk order by id_pesanan");
        $query->execute();
        // mengambil banyak data dengan fetchAll
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        // mengembalikan data
        return $data;
        // hapus variable memory
        $query->closeCursor();
        unset($data);
    }

    //Menghitung Total Semua dari

    public function tampil_semua_detail()
    {
        $query = $this->conn->prepare("select id_detail, tanggal_pesanan, nama_produk, jumlah_produk, subtotal, metode_pembayaran from detail_pesanan, pesanan, produk where detail_pesanan.id_pesanan = pesanan.id_pesanan and detail_pesanan.id_produk = produk.id_produk order by id_detail");
        $query->execute();
        // mengambil banyak data dengan fetchAll
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        // mengembalikan data
        return $data;
        // hapus variable memory
        $query->closeCursor();
        unset($data);
    }

    // public function hitung_jumlah_produk() {
    //     $query = $this->conn->prepare("SELECT COUNT (*) AS jumlah_produk FROM produk");
    //     $query->execute();
    //     // mengambil banyak data dengan fetchAll
    //     $data = $query->fetchAll(PDO::FETCH_ASSOC);
    //     // mengembalikan data
    //     return $data;
    //     // hapus variable memory
    //     $query->closeCursor();
    //     unset($data);
    // }

    public function tampil_pesanan($id_pesanan)
    {
        $query = $this->conn->prepare("SELECT id_pesanan, id_pelanggan, id_produk, tanggal_pesanan, jumlah FROM pesanan WHERE id_pesanan=?");
        $query->execute(array($id_pesanan));
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $data;
    }

    public function tambah_pesanan($data)
    {
        $query = $this->conn->prepare("INSERT IGNORE INTO pesanan (id_pesanan, id_pelanggan, id_produk, tanggal_pesanan, jumlah) VALUES (?, ?, ?, ?, ?)");
        $query->execute(array($data['id_pesanan'], $data['id_pelanggan'], $data['id_produk'], $data['tanggal_pesanan'], $data['jumlah']));
        $query->closeCursor();
    }

    public function ubah_pesanan($data)
    {
        $query = $this->conn->prepare("UPDATE pesanan SET id_pelanggan=?, id_produk=?, tanggal_pesanan=?, jumlah=? WHERE id_pesanan=?");
        $query->execute(array($data['id_pelanggan'], $data['id_produk'], $data['tanggal_pesanan'], $data['jumlah'], $data['id_pesanan']));
        $query->closeCursor();
    }

    public function hapus_pesanan($id_pesanan)
    {
        $query = $this->conn->prepare("DELETE FROM pesanan WHERE id_pesanan=?");
        $query->execute(array($id_pesanan));
        $query->closeCursor();
    }

    // Tabel Detail pesanan
    public function tampil_detail_pesanan()
    {
        $query = $this->conn->prepare("SELECT id_detail, id_pesanan, id_produk, jumlah_produk, metode_pembayaran, subtotal FROM `detail_pesanan` ORDER BY id_detail");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $data;
    }

    public function tampil_detail_pesanan_by_id($id_detail)
    {
        $query = $this->conn->prepare("SELECT id_detail, id_pesanan, id_produk, jumlah_produk, metode_pembayaran, subtotal FROM `detail_pesanan` WHERE id_detail=?");
        $query->execute(array($id_detail));
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $data;
    }

    public function tambah_detail_pesanan($data)
    {
        $query = $this->conn->prepare("INSERT IGNORE INTO `detail_pesanan` (id_detail, id_pesanan, id_produk, jumlah_produk, subtotal, metode_pembayaran) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute(array($data['id_detail'], $data['id_pesanan'], $data['id_produk'], $data['jumlah_produk'], $data['subtotal'], $data['metode_pembayaran']));
        $query->closeCursor();
    }

    public function ubah_detail_pesanan($data)
    {
        $query = $this->conn->prepare("UPDATE `detail_pesanan` SET id_pesanan=?, id_produk=?, jumlah_produk=?, subtotal=?, metode_pembayaran=? WHERE id_detail=?");
        $query->execute(array($data['id_detail'], $data['id_pesanan'], $data['id_produk'], $data['jumlah_produk'], $data['subtotal'], $data['metode_pembayaran']));
        $query->closeCursor();
    }

    public function hapus_detail_pesanan($id_detail)
    {
        $query = $this->conn->prepare("DELETE FROM `detail_pesanan` WHERE id_detail=?");
        $query->execute(array($id_detail));
        $query->closeCursor();
    }
}

?>