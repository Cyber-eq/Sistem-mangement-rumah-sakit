<?php
include 'config.php';

// Mengambil data dari tabel management
$sql = "SELECT * FROM management";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Manajemen Rumah Sakit</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Pasien</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Pasien</th>
            <th>Rekam Medis</th>
            <th>Jadwal Dokter</th>
            <th>Administrasi</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Keluar</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data untuk setiap baris
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["nama_pasien"]. "</td>
                        <td>" . $row["rekam_medis"]. "</td>
                        <td>" . $row["jadwal_dokter"]. "</td>
                        <td>" . $row["administrasi"]. "</td>
                        <td>" . $row["tanggal_masuk"]. "</td>
                        <td>" . $row["tanggal_keluar"]. "</td>
                        <td><a href='hapus_data.php?id=" . $row["id"]. "'>Hapus</a></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <br>
    <a href="edit_data.php">Tambah Data Baru</a> | <a href="hapus_data.php">Hapus Data</a>
</body>
</html>
