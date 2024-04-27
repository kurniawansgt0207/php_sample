<?php
    
    include './koneksi.php';
    
    $kode = $_REQUEST['kodebrg'];
    $nama = $_REQUEST['namabrg'];
    $harga = $_REQUEST['hargabrg'];
    $merk = $_REQUEST['merkbrg'];
    $status = $_REQUEST['statusbrg'];
    
    $qry = "INSERT INTO barang (kode_produk, nama_produk, harga_produk, merk_produk, status_produk) 
    VALUES ('".$kode."','".$nama."','".$harga."','".$merk."','".$status."')";
    $insert = $dbh->query($qry);
    
    header("location: list_barang.php");
?>    