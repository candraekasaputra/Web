<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Data - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"><strong>FBeasiswa&nbsp;</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">jenis beasiswa</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="daftar.php">daftar beasiswa</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="getdata.php">hasil pendaftaran<br></a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block Data">
            <div class="container"> <br>
<?php
// membuat koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'beasiswa';

$koneksi = mysqli_connect($host, $username, $password, $database);

// mengambil data dari tabel
$sql = "SELECT * FROM beasiswa";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
  // menampilkan data yang ada pada database pada halaman web
  echo '<table>';
  echo '<tr><th>Nama</th><th>Email</th><th>NomorHP</th><th>Semester</th><th>IPK</th><th>&nbsp;Beasiswa</th></th></tr>';
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['nama'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['NomorHP'] . '</td>';
    echo '<td>&nbsp&nbsp;&nbsp;' . $row['smt'] . '</td>';
    echo '<td>' . $row['ipk'] . '</td>';
    echo '<td>' . $row['beasiswa'] . '</td>';
    echo '</tr>';
  }
  echo '</table>';
} else {
  echo "Data tidak ditemukan";
}


// menutup koneksi
mysqli_close($koneksi);
