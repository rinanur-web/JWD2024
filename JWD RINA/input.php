<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>web beasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
            <a class="navbar-brand">Sistem Informasi Beasiswa</a>
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
        <div class="container mt-3">
            <h2>form input</h2>
             <!-- Formulir yang akan mengirim data ke simpan.php dengan metode POST -->
            <form action="simpan.php" method="post" name="smester" enctype="multipart/form-data">
            <div class="mb-3">
        </div>
            <div class="mb-3">
                <label for="npm"> Masukan NPM:</label>
                <input type="number" class="form-control" id="npm" placeholder="Enter npm" name="npm">
            </div>
            <div class="mb-3">
                <label for="nama"> Masukan Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="email"> Masukan Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" onchange="validEmail()">
            </div>
            <div class="mb-3">
                <label for="hp"> Masukan nomor hp:</label>
                <input type="number" class="form-control" id="hp" placeholder="Enter hp" name="hp" onchange="validNo()">
            </div>
            
            <div class="mb-3">
                <label for="smt">Semester saat ini:</label>
                <select class="form-control" id="smt" name="smt" onchange="semester()">
                    <option> pilih semester</option>
                    <option value="semester 1">semester 1</option>
                    <option value="semester 2">semester 2</option>
                    <option value="semester 3">semester 3</option>
                    <option value="semester 4">semester 4</option>
                    <option value="semester 5">semester 5</option>
                    <option value="semester 6">semester 6</option>
                    <option value="semester 7">semester 7</option>
                    <option value="semester 8">semester 8</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="ipk">IPK terakhir:</label>
                <input type="number" class="form-control" id="ipk" placeholder="ipk terakhir" name="ipk" readonly="readonly" onchange="semester()">
            </div>
            <div class="mb-3">
                <label for="bsw">Pilihan beasiswa:</label>
                <select class="form-control" id="bsw" name="bsw" onchange="tidak_lolos()">
                    <option>pilih beasiswa</option>
                    <option value="beasiswa akademik">beasiswa akademik</option>
                    <option value="beasiswa non akademik">beasiswa non akademik</option>
                    <option value="beasiswa iom">beasiswa iom</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto :</label><br>
                <input type="file" id="foto" name="foto" class="form-control-file" onchange="tidak_lolos() ">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Data sudah benar
                </label>
            </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
        <button type="reset" class="btn btn-warning">RESET</button>
        </form>
    </div>
    
    <script type="text/javascript">
         //fungsi untuk meneteapkan ipk berdasarkan semester
         function semester(){
            var semester = document.smester.smt.value;
            var ttlipk = 0;

             if(semester === "semester 1"){
                ttlipk = 3.5;
             }else if (semester === "semester 2"){
                ttlipk = 3.8;
             }else if(semester === "semester 3"){
                ttlipk = 2.7;
             }else if(semester === "semester 4"){
                ttlipk = 3.6;
             }else if(semester === "semester 5"){
                ttlipk = 2.9;
             }else if(semester === "semester 6"){
                ttlipk = 3.3;
             }else if (semester === "semester 7"){
                ttlipk = 3.2;
             }else if(semester === "semester 8"){
                ttlipk = 2.8;
             }

             document.getElementById("ipk").value = ttlipk; //menetapkan nilai ipk pada input
             tidak_lolos(); //memanggil fungsi tidak_lolos untuk validasi
            }
        //fungsi validasi email
        function validEmail(){
            var surel = document.smester.email.value; //mengambil nilai dari input email

            if(surel.includes('@') == false){
                window.alert("ini bukan email");} //menampilkan alert jika email tidak valid
            // }else if(surel.includes('.') == false){
            //     window.alert("ini bukan email");   
            // }
        }

        // Fungsi untuk menonaktifkan pilihan beasiswa dan unggah foto jika IPK kurang dari 3.0
        function tidak_lolos() {
            var ipk = parseFloat(document.smester.ipk.value); //mengambil nilai ipk dari input
            var semangat = ipk < 3.0; //mengecek apakah ipk < 3.0

            document.getElementById('bsw').disabled = semangat; // Menonaktifkan dropdown beasiswa jika IPK kurang dari 3.0
            document.getElementById('foto').disabled = semangat; // Menonaktifkan input foto jika IPK kurang dari 3.0
        }
        // fungsi validasi no hp
        // function validNo(){
        //     var nmr = parseInt(document.smester.hp.value)

        //     if(hp != 14){
        //         window.alert("angka harus 14 angka")
        //     }
        // }
    </script>
</body>
</html>    