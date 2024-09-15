<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
     /* Menetapkan tinggi dan margin untuk elemen html dan body */
    html, body {
      height: 100%;
      margin: 0;
    }
    /* Membuat kontainer flex untuk membuat footer tetap di bawah */
    .content-wrapper {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .content {
      flex: 1;
    }
    .footer {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 1rem 0;
    }
  </style>
</head>
<body>
  <div class="content-wrapper">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sistem Informasi Beasiswa</a>
        </div>
    </nav>
    <div class="content">
      <div>
        <ul class="nav nav-tabs">
          <!-- Tab untuk halaman Home -->
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <!-- Tab untuk halaman daftar beasiswa -->
          <li class="nav-item">
            <a class="nav-link" href="input.php">Daftar Beasiswa</a>
          </li>
          <!-- Tab untuk halaman hasil -->
          <li class="nav-item">
            <a class="nav-link" href="tampil.php">Hasil</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <h4>Pilihan Beasiswa</h4>
          <p>Beasiswa Akademik<br>
             Beasiswa Non-Akademik<br>
             Beasiswa IOM
          </p>
        </div>
        <!-- Konten dalam bentuk grid -->
        <div class="col-sm-3">
          <!-- Kolom untuk pilihan beasiswa -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Beasiswa Akademik</h5>
              <p class="card-text">
                Syarat yang diperlukan:<br>
                1. Fc KHS<br>
                2. Fc KTP
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Beasiswa Non-Akademik</h5>
              <p class="card-text">
                Syarat yang diperlukan:<br>
                1. Fc KHS<br>
                2. Fc KTP
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Beasiswa IOM</h5>
              <p class="card-text">
                Syarat yang diperlukan:<br>
                1. Fc KHS<br>
                2. Fc KTP
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <p>copyright @rinanr</p>
      </div>
    </footer>
  </div>
</body>
</html>