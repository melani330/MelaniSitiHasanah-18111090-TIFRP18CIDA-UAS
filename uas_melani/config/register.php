<?php
require_once "koneksi.php";
$nama_depan = $_POST["namadepan"];
$nama_belakang= $_POST["namabelakang"];
$email= $_POST["email"];
$username= $_POST["username"];
$password= $_POST["password"];

$q = $database_connection->prepare("INSERT INTO `data_pendaftar` (`id`, `nama_depan`, `nama_belakang`, `email`, 
`username`, `password`) VALUES (NULL, ?, ?, ?, ?, SHA1(?));");
$q->execute([$nama_depan, $nama_belakang, $email, $username,$password]);
header("Location: http://localhost/uas_melani/halaman/halaman_utama/index.php");
?>