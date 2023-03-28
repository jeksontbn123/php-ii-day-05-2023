<?php
// integrasi koneksi
require_once('koneksi.php');


// buat database baru
    $sql = "CREATE DATABASE higland_roastery";

    if($conn->query($sql) === TRUE) {
        echo "Database berhasil dibuat";
    } else {
        echo "Database Gagal Dibuat ";
    }

?>