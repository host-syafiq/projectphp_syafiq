<?php
include 'config/db.php'; // Koneksi ke database

$id = $_GET['id']; // ambil ID dari URL

$koneksi->query("DELETE FROM pegawai WHERE id=$id");
// Jalanin query hapus data berdasarkan id

echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
// Tampilin alert lalu redirect ke halaman utama
?>