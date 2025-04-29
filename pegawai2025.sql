CREATE DATABASE IF NOT EXISTS pegawai2025;
USE pegawai2025;

CREATE TABLE pegawai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    jabatan VARCHAR(100),
    email VARCHAR(100),
    telepon VARCHAR(20),
    alamat TEXT,
    tanggal_lahir DATE
);
