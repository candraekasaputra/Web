<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hasil - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>
<!-- Menu Untuk Menampilkan Hasil Yang Telah Di inputkan -->
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"><strong>FBeasiswa&nbsp;</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">jenis beasiswa</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="daftar.php">daftar beasiswa</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="hasil.php">hasil pendaftaran<br></a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block Hasil">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><strong>Hasil Pendaftaran</strong></h2>
                </div>
    <p align="right"> Status Ujian : <?= $_POST['status_ajuan'] ?> </p>
    <p>Nama         : <?= $_POST['nama'] ?></p>
    <p>email        : <?= $_POST['email'] ?></p>
    <p>nomor        : <?= $_POST['NomorHP'] ?></p>
    <p>semester     : <?= $_POST['smt'] ?></p>
    <p>ipk          : <?= $_POST['ipk'] ?></p>
    <p>beasiswa     : <?= $_POST['pilbeasiswa'] ?></p>
    <p>File berkas  :  </p> 


    <?php
    

    // var_dump(count($_FILES['data']['name']));
    $folder = "assets/uploads";
    if(!is_dir($folder)){
        mkdir($folder, 0777, $rekursif = true);
    }
    for($i = 0; $i<count($_FILES['data']['name']); $i++){
    // echo $_FILES['data']['name'][$i];

        $tmp = $_FILES["data"]["tmp_name"][$i];
        $filename = $_FILES["data"]["name"][$i];
        $location = $folder.'/'.$filename;

        $proses_up = move_uploaded_file($tmp, $location);

        echo '<a href="'
        .$location.
        '" target="_blank">'.$filename.'</a> ';

        echo "<br>";
        
        if($proses_up){

        }
        
    }
        // move_uploaded_file($_FILES["data"]["tmp_name"], $_FILES["data"]["name"]);
        // mengambil data dari form
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $NomorHP = $_POST['NomorHP'];
        $smt  = $_POST['smt'];
        $ipk = $_POST['ipk'];
        $beasiswa   = $_POST['pilbeasiswa'];


        // membuat koneksi ke database
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'beasiswa';

        $koneksi = mysqli_connect($host, $username, $password, $database);

        // memasukkan data ke dalam tabel
        $sql = "INSERT INTO beasiswa VALUES ('$nama', '$email', '$NomorHP','$smt','$ipk','$beasiswa')";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
        echo "Data Sudah Terkirim";
        } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
        }

        // menutup koneksi
        mysqli_close($koneksi);
        
        
        ?>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Hasil</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>