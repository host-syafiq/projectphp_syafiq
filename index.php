<?php include 'config/db.php'; ?>
<!-- Menghubungkan file ini ke database lewat db.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2>Data Pegawai</h2>
    <a href="tambah.php" class="btn btn-success mb-3">+ Tambah Pegawai</a>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1; // nomor urut mulai dari 1
            $query = $koneksi->query("SELECT * FROM pegawai");
            // Jalankan query SQL buat ambil semua data dari tabel pegawai
            
            while ($row = $query->fetch_assoc()) {
                // Looping data, setiap baris data disimpan dalam array $row
                ?>
                <tr>
                    <td><?= $no++ ?></td> <!-- Tampilkan nomor urut, lalu tambahkan 1 -->
                    <td><?= $row['nama'] ?></td> <!-- Tampilkan nama dari database -->
                    <td><?= $row['jabatan'] ?></td> <!-- Tampilkan jabatan dari database -->
                    <td><?= $row['email'] ?></td> <!-- Tampilkan email dari database -->
                    <td><?= $row['telepon'] ?></td> <!-- Tampilkan nomor telepon -->
                    <td><?= $row['alamat'] ?></td> <!-- Tampilkan alamat dari database -->
                    <td><?= $row['tanggal_lahir'] ?></td> <!-- Tampilkan tanggal lahir -->
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <!-- mengarah ke edit.php dengan parameter id pegawai -->
                        <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')"
                            class="btn btn-danger btn-sm">Hapus</a>
                        <!-- mengarah ke hapus.php dengan parameter id pegawai -->
                        <!-- Ada konfirmasi biar ga langsung terhapus -->
                    </td>
                </tr>
            <?php } // tutup perulangan while ?>
        </tbody>
    </table>

</body>

</html>