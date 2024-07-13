<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Baru</h2>
    <form method="post" action="tambah_data.php">
        <h3>Data Pasien</h3>
        Nama Pasien: <input type="text" name="nama_pasien" required><br>
        <h3>Rekam Medis</h3>
        Rekam Medis: <textarea name="rekam_medis" required></textarea><br>
        <h3>Jadwal Dokter</h3>
        Jadwal Dokter: <input type="text" name="jadwal_dokter" required><br>
        <h3>Administrasi</h3>
        Administrasi: <textarea name="administrasi" required></textarea><br>
        <h3>Tanggal</h3>
        Tanggal Masuk: <input type="date" name="tanggal_masuk" required><br>
        Tanggal Keluar: <input type="date" name="tanggal_keluar"><br>
        <input type="submit" value="Tambah Data">
    </form>
</body>
</html>
