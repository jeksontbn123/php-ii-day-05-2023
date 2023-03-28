<?php
// integrasi koneksi
    require_once('koneksi.php');

    // membuat tabel baru di database
    $sql = "CREATE TABLE team (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_depan VARCHAR(30) NOT NULL,
    nama_belakang VARCHAR(30) NOT NULL,
    alamat_email VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table team created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>
?>