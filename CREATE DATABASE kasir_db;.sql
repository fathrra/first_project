--CREATE DATABASE kasir_db;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password(59),
    role ENUM('admin', 'kasir')
);
CREATE TABLE kategori (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_kategori VARCHAR(100),
);
CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100),
    harga INT,
    kategori_id INT,
    stok INT,
    FOREIGN KEY (kategori_id) REFERENCES kategori(id)
);
CREATE TABLE transaksi_header(
    id INT AUTO_INCREMENT PRIMARY KEY,
    invoice VARCHAR(20),
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_bayar INT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
