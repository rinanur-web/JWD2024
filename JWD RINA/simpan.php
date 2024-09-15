<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$npm         = $_POST['npm'];
$nama         = $_POST['nama'];
$email        = $_POST['email'];
$hp       	  = $_POST['hp'];
$smt       	  = $_POST['smt'];
$ipk         = $_POST['ipk'];
$bsw          = $_POST['bsw'];

//proses upload data
$nama_foto = $_FILES['foto']['name'];
$explode_foto = explode('.', $nama_foto);
$ekstensi_foto = $explode_foto[1];
$ukuran_foto = $_FILES['foto']['size'];
$tmp_foto = $_FILES['foto']['tmp_name'];
$ekstensi_boleh = array ('jpg', 'jpeg', 'png');
$ukuran_boleh = 1028000;
$direktori_foto = 'img/';

if (in_array($ekstensi_foto, $ekstensi_boleh)) {
  if ($ukuran_foto <= $ukuran_boleh){
    if(move_uploaded_file($tmp_foto, $direktori_foto . $nama_foto)){
        //query insert data ke dalam database
       

        //kondisi pengecekan apakah data berhasil dimasukkan atau tidak
        
    }
  }
  else{
    //pesan error gagal insert data
    echo "Data Gagal Disimpan, ukuran terlalu besar";
  }
} 
$query = "INSERT INTO beasiswa (npm,nama,email,hp,smt,ipk,bsw,foto) 
        VALUES ('$npm', '$nama','$email','$hp','$smt','$ipk','$bsw','$nama_foto')";
if($koneksi->query($query)) {

  //redirect ke halaman index.php 
  header("location: tampil.php");

} else {

  //pesan error gagal insert data
  echo "Data Gagal Disimpan!";

}

?>