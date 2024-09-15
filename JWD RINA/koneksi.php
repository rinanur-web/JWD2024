<?php
// Mendefinisikan variabel untuk nama host database
$host = "localhost";

// Mendefinisikan variabel untuk nama pengguna database
$username = "root";

// Mendefinisikan variabel untuk password pengguna database
$password = "";

// Mendefinisikan variabel untuk nama database
$db_name = "beasiswa";

// Membuat koneksi ke database menggunakan variabel yang telah didefinisikan
$koneksi = mysqli_connect($host, $username, $password, $db_name);

// Mengecek apakah koneksi berhasil atau gagal
// Jika gagal, tampilkan pesan kesalahan
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
