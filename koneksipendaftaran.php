<!-- Menambahkan skrip php -->
<?php
// Mendefinisikan nama server
$host		= "localhost";
// Mendefinisikan username
$user		= "root";
// Mendefinisikan password
$password	= "";
// Mendefinisikan nama database
$database	= "modul8";
// Menghubungkan php dengan mysql menggunakan ekstensi mysqli
$koneksi = mysqli_connect($host, $user, $password, $database);
?>