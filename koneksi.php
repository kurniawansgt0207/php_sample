<?php
    try {
      // buat koneksi dengan database
      $dbh = new PDO('mysql:host=database;dbname=tutorials', "root", "change_me");

      // set error mode
      $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      echo "Koneksi berhasil";
    }
    catch (PDOException $e) {
      // tampilkan pesan kesalahan jika koneksi gagal
      print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
      die();
    }
?>

