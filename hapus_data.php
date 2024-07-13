<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Melindungi dari SQL Injection
    $id = $conn->real_escape_string($id);

    $sql = "DELETE FROM pasien WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "ID tidak ditemukan atau request method tidak valid.";
}
?>
