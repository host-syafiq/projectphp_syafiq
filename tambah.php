<?php include 'config/db.php'; ?>
<!-- Menghubungkan file ini ke database -->

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h2>Tambah Data Pegawai</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>


    <?php
    if (isset($_POST['simpan'])) {
        // Cek apa tombol simpan ditekan
        $nama = $_POST['nama'];       // Ambil data nama dari form
        $jabatan = $_POST['jabatan']; // ambil data jabatan
        $email = $_POST['email'];     // Ambil data email
        $telepon = $_POST['telepon']; // Ambil data telepon
        $alamat = $_POST['alamat'];   // Ambil data alamat
        $tanggal_lahir = $_POST['tanggal_lahir']; // Ambil data tanggal lahir
    
        // Masukkan data ke tabel pegawai
        $koneksi->query("INSERT INTO pegawai (nama, jabatan, email, telepon, alamat, tanggal_lahir) 
        VALUES ('$nama', '$jabatan', '$email', '$telepon', '$alamat', '$tanggal_lahir')");

        // Tampilkan alert dan redirect ke index
        echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
    }
    ?>

</body>

</html>