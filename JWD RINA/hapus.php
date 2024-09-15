<?php

// Menghubungkan dengan file koneksi database
include('koneksi.php');

// Mengambil nilai npm dari parameter URL
$npm = $_GET['npm'];

// Membuat query untuk menghapus data dari tabel beasiswa berdasarkan npm
$query = "DELETE FROM beasiswa WHERE npm = '$npm'";

// Mengeksekusi query dan memeriksa apakah berhasil
if($koneksi->query($query)) {
    // Jika berhasil, mengarahkan pengguna ke halaman tampil.php
    header("location: tampil.php");
} else {
    // Jika gagal, menampilkan pesan kesalahan
    echo "DATA GAGAL DIHAPUS!";
}
?>
