<!-- Menambahkan skrip php -->
<?php
// Mendefinisikan nama server
$host		= "localhost";
// Mendefinisikan username
$user		= "root";
// Mendefinisikan password
$password	= "";
// Mendefinisikan nama database
$database	= "db_siswa";
// Menghubungkan php dengan mysql menggunakan ekstensi mysqli
$koneksi = mysqli_connect($host, $user, $password, $database);
?>