<?php
// membuat koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'beasiswa';

$koneksi = mysqli_connect($host, $username, $password, $database);
if(mysqli_connect_error())
{
    echo "koneksi database gagal";
}
else{
    echo "";
}
?>