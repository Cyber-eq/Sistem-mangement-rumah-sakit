<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pasien = $_POST['nama_pasien'];
    $rekam_medis = $_POST['rekam_medis'];
    $jadwal_dokter = $_POST['jadwal_dokter'];
    $administrasi = $_POST['administrasi'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $tanggal_keluar = $_POST['tanggal_keluar'];

    $sql = "INSERT INTO management (nama_pasien, rekam_medis, jadwal_dokter, administrasi, tanggal_masuk, tanggal_keluar) 
            VALUES ('$nama_pasien', '$rekam_medis', '$jadwal_dokter', '$administrasi', '$tanggal_masuk', '$tanggal_keluar')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
