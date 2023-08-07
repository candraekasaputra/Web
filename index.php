<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>
<!-- Mengkoneksikan menu yang ada pada navbar web -->
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"><strong>FBeasiswa&nbsp;</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">jenis beasiswa</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="daftar.php">daftar beasiswa</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="getdata.php">hasil pendaftaran<br></a></li>
                </ul>
        </div>
        </div>
    </nav>
    <!-- Tampilan Halam Utama -->

    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image: url(&quot;assets/img/tech/bea.jpg&quot;);color: rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2><strong>SELAMAT DATANG DI FORM PENDAFTARAN BEASISWA</strong></h2>
            </div>
        </section>
        <!-- Menampilkan Jenis Jenis Beasiswa -->
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><strong>Jenis Beasiswa</strong></h2>
                    <p>Berikut Merupakan Jenis Jenis Beasiswa yang dapat di daftar :</p>
                </div>
            </div>
            <section class="clean-block about-us">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/tech/bea1.jpg">
                                <div class="card-body info">
                                    <h4 class="card-title">Beasiswa Akademik</h4>
                                    <p class="card-text"><br>Beasiswa&nbsp;Akademik&nbsp;adalah bantuan biaya pendidikan yang diberikan dan ditujukan bagi mahasiswa yang sedang menjalani masa studi kuliah program diploma dan sarjana di berbagai perguruan tinggi di seluruh
                                        Indonesia<br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/tech/bea2.jpeg">
                                <div class="card-body info">
                                    <h4 class="card-title">Beasiswa Non Akademik</h4>
                                    <p class="card-text"><br>Beasiswa Non Akademik adalah beasiswa yang diberikan dan ditujukan bagi mahasiswa yang memiliki prestasi dalam bidang&nbsp; non-akademik yang dibuktikan dengan scan juara tingkat kota maupun provinsi.<br><br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/tech/bea3.jpg">
                                <div class="card-body info">
                                    <h4 class="card-title">Beasiswa Bantuan</h4>
                                    <p class="card-text"><br>Beasiswa bantuan adalah beasiswa yang&nbsp;diberikan kepada pelajar atau mahasiswa yang tergolong kurang mampu secara ekonomi, sehingga tidak dapat menanggung beban biaya studi dalam masa perkuliahannya<br><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Menampilkan grafik -->
  
            <?php 
            include ('konekgrafik.php');
            $data_beasiswa = mysqli_query($koneksi,"SELECT pilbeasiswa FROM beasiswa GROUP BY pilbeasiswa"); 
            $pendaftar = mysqli_query($koneksi,"SELECT COUNT(ipk) AS nama FROM beasiswa GROUP BY pilbeasiswa");
            ?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <body>
            <h1>&nbsp;Grafik Beasiswa</h1>
            <center><canvas id="pendaftar"></canvas>
        </center>
        <script>
        var ctx = document.getElementById("pendaftar").
        getContext('2d');
        /// membuat tampilan dan pemanggilan isi data grafik dari database 
        var mychart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php while($row = mysqli_fetch_array
                        ($data_beasiswa)){echo '"'.$row['pilbeasiswa'].'",
                        ';}?>],
                datasets:
                [
                    {
                        label: '',
                        data: [<?php while($row = mysqli_fetch_array
                        ($pendaftar)){echo'"'.$row['nama'].'",';}?>],
                        backgroundColor:['#7FFFD4','#17BEBB','#FFC914','#7FFF00','#9932CC','#008000','#17BEBB'],
                        borderWidth :2
                    }
                ]
            },
            /// pembuatan grafik yang dimulai dari angka nol
            options: {
                scales: {
                    yAxes:[{
                        ticks:{
                            beginAtZero:true
                        }
                    }]
                }
            }
        })
    </script>
        </body>
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
                    <h5>About us</h5>
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
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    



</body>

</html>