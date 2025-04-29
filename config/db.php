<?php
$host = "localhost"; // alamat host database (localhost)
$user = "root";      // username database (default: root)
$pass = "";          // password database (kosong karna default /XAMPP)
$db = "pegawai2025";     // nama database yang dipake

$koneksi = new mysqli($host, $user, $pass, $db);
// Membuat koneksi baru ke database pake objek mysqli

if ($koneksi->connect_error) {
    // Cek apakah koneksi gagal
    die("Koneksi gagal: " . $koneksi->connect_error);
    // Jika gagal, muncul pesan error dan hentikan proses
}
?>