<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pricing - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>
<!-- Menu Halaman Tampilan Daftar -->
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"><strong>FBeasiswa&nbsp;</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">jenis beasiswa</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="daftar.php">daftar beasiswa</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="getdata.php">hasil pendaftaran<br></a></li>
                </ul>
        </div>
        </div>
    </nav>
    </main>
    <!-- Menampilkan form inputan untuk mendaftar beasiswa -->
    <main class="page pricing-table-page">
        
        <section class="clean-block clean-pricing dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><strong>Form Pendaftaran Beasiswa</strong></h2>
                </div>
                
                <div class="row justify-content-center"></div>
                <div class="container">
      <nav>
        <div class="nav-item"></div>
      </nav>
      <main>
      <div class="form-daftar">
        <!-- Melanjutkan untuk beralih ke halam hasil inpiutan setelah klik button kirim -->
        <form action="hasil.php" method="post" enctype="multipart/form-data" class="form">
          
          <div class="form-group">
            <label for="">Nama</label> 
            <input class="form-control" name="nama" id = "nama"type="text" required />
          </div>
        
          <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email" onkeydown="checkEmail(this)" required />
          </div>
          <div class="form-group">
            <label for="">nomor HP</label>
            <input class="form-control" name="NomorHP" onchange="console.log(this.value)" required />
          </div>
          <div class="form-group">
            <label for="">Semseter saat ini</label> &nbsp;
            <select name="smt" id="" onchange="semester(this)" required>
              <option value="0">--Pilih--</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">IPK terakhir</label>
            <input class="form-control" name="ipk" type="text" id="ipk" readonly />
          </div>
          <div class="form-group">
            <label for="">Pilihan beasiswa</label>
            <select class="form-control" name="pilbeasiswa" id="pilbeasiswa" required  disabled="false">
            <option value="">--Pilih--</option>
              <option value="Beasiswa Akademik">Beasiswa Akademik</option>
              <option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
              <option value="Beasiswa Bantuan">Beasiswa Bantuan</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="">Masukan berkas</label>
            <input class="form-control" name="data[]" type="file" id="berkas" class="form-control" accept=".pdf" title="Upload PDF" multiple required/>
          </div>
          <div class="form-group">
            <input type="text" name="status_ajuan" hidden value ="belum terferifikasi"/>
          </div>
          <br>
          <div>
            <button class="btn btn-primary btn-block" id="btnSubmit" type="submit">Kirim</button>
          <br> <a class="btn btn-primary btn-block" href="#">Batal</a>
          </div>
        </form>
      </div>
    </main>
  </div>
  <script>
    function semester(smt) {
      const nilai = [2.4, 3.5, 3.0, 2.5, 3.4, 1.8, 3.8, 3.1];
      const ipk = nilai[smt.value - 1];

      if(smt.value!=0){
        document.querySelector("#ipk").value = ipk;
        checkIpk(ipk)
      }
      else {
        document.querySelector("#ipk").value = "";
      }
    }

    function checkIpk(ipkku){
      if(ipkku>3){
        document.querySelector("#pilbeasiswa").disabled = false;
        document.querySelector("#pilbeasiswa").focus();
        document.querySelector("#berkas").disabled = false;
        document.querySelector("#btnSubmit").disabled = false;
      }
      else {
        document.querySelector("#pilbeasiswa").disabled = true;
        document.querySelector("#berkas").disabled = true;
        document.querySelector("#btnSubmit").disabled = true;
      }
    }

    function checkEmail(ini) {
      // const regex = new RegExp("[a-z0-9]+@[a-z]+\.[a-z]{3}");

      // isValid = regex.test(ini.value);

      // console.clear();
      // console.log(isValid);
    }
    </script>
                
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
</body>

</html>