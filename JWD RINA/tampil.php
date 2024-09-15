<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sistem Informasi Beasiswa</a>
        </div>
      </nav>
      
      <div>
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="input.php">Daftar Beasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="tampil.php">Hasil</a>
          </li>
        </ul>
      </div>
          <div class="container">         
              <div class="row">
                <div class="col-md-12">
                   <div class="card">
                      <div class="card-header">
              beasiswa
            </div>
            <div class="card-body">
              <!-- Tabel untuk menampilkan data beasiswa -->
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NPM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NO HP</th>
                    <th scope="col">SEMESTER SAAT INI</th>
                    <th scope="col">IPK TERAKHIR</th>
                    <th scope="col">PILIHAN BEASISWA</th>
                    <th scope="col">UPLOAD BERKAS SYARAT</th>
                    <th scope="col">STATUS AJUAN</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    // menghubungkan dengan file koneksi database
                      include('koneksi.php');
                      //inisialisasi nomor urut
                      $no = 1;
                      // Query untuk mengambil data dari tabel beasiswa
                      $query = mysqli_query($koneksi,"SELECT * FROM beasiswa");
                      // Loop untuk menampilkan setiap baris data beasiswa
                      while($row = mysqli_fetch_array($query)){
                  ?>
                    <tr>
                        <td><?php echo $no++ ?></td> <!-- Menampilkan nomor urut -->
                        <td><?php echo $row['npm'] ?></td> <!-- Menampilkan npm-->
                        <td><?php echo $row['nama'] ?></td> <!-- Menampilkan nama-->
                        <td><?php echo $row['email'] ?></td> <!-- Menampilkan email -->
                        <td><?php echo $row['hp'] ?></td> <!-- Menampilkan nomor hp -->
                        <td><?php echo $row['smt'] ?></td> <!-- Menampilkan semester saat ini -->
                        <td><?php echo $row['ipk'] ?></td> 
                        <td><?php echo $row['bsw'] ?></td> <!-- Menampilkan beasiswa -->
                        <td><?php echo $row['foto'] ?></td> <!-- Menampilkan foto -->
                        <td>belum diverifikasi</td> <!-- Menampilkan belum diverifikasi -->
                        <td class="text-center">
                        <a href="hapus.php?npm=<?php echo $row['npm'] ?>" class="btn btn-sm btn-danger">HAPUS</a> <!-- Menampilkan button hapus -->
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
          </div>
      </div>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script>
              // Menginisialisasi DataTable saat dokumen siap
              $(document).ready( function () {
                  $('#myTable').DataTable();
              } );
            </script>
          </div>    
        </div>
      </div>
</body>
</html>