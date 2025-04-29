<?php
include 'config/db.php';
$id = $_GET['id'];
// ambil id dari URL untuk mencari data yang mau diedit

$data = $koneksi->query("SELECT * FROM pegawai WHERE id=$id")->fetch_assoc();
// ambil data pegawai berdasarkan id, simpan dlm variabel $data
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h2>Edit Data Pegawai</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" value="<?= $data['jabatan'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="<?= $data['email'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" value="<?= $data['telepon'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required><?= $data['alamat'] ?></textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>" class="form-control" required>
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>


    <?php
    if (isset($_POST['update'])) {
        // Jika tombol update ditekan
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];

        // Update data di database
        $koneksi->query("UPDATE pegawai SET nama='$nama', jabatan='$jabatan', email='$email', telepon='$telepon', alamat='$alamat', tanggal_lahir='$tanggal_lahir' WHERE id=$id");

        // Tampilkan alert dan kembali ke index
        echo "<script>alert('Data berhasil diupdate'); window.location='index.php';</script>";
    }
    ?>

</body>

</html>