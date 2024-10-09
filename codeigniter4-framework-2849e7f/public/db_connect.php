<?php
$servername = "localhost"; // atau bisa sesuaikan dengan host database Anda
$username = "root"; // nama pengguna MySQL
$password = ""; // password MySQL
$dbname = "data_cemslab1"; // nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>
