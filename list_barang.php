<?php
    // menggunakan koneksi database di file koneksi.php
    include './koneksi.php';
    
    // query menampilkan data dari tabel barang
    $qry = "SELECT * FROM barang ORDER BY kode_produk";
    // menjalankan query dengan menggunakan variable $dbh di file koneksi.php
    $data = $dbh->query($qry);
    
    // menampilkan data hasil eksekusi query dengan koneksi database
    echo "<br><br>";
    echo "Daftar Master Barang<br>";
    echo "<a href='tambah_barang.php'><button>Tambah Barang</button></a>";
    echo "<br>===========================================";
    echo "<br>No | Kode Produk | Nama Produk | Harga | Merk | Status";
    echo "<br>===========================================";
    echo "<br>";
    $no = 1;
    foreach ($data as $barang){
        echo $no." | ".$barang['kode_produk']." | ".$barang['nama_produk']
                ." | ".$barang['harga_produk']." | ".$barang['merk_produk']
                ." | ".$barang['status_produk']."<br>";
        echo "-------------------------------------------------------------------------<br>";
        
        $no++;
    }   
?>   






