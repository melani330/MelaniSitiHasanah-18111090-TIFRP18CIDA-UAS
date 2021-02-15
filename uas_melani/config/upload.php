<?php
require_once "koneksi.php";
$id_pendaftar = $_POST['id_pendaftar'];
$namafile = $_FILES['file']['name'];
$tmp_name =$_FILES['file']['tmp_name'];


if($id_pendaftar == ""){
    echo "tidak bisa melakukan upload file";
}else{
    move_uploaded_file($tmp_name,'../image/'.$namafile);
    $q = $database_connection->prepare("UPDATE `biodata` SET `pic_location`= ? 
    WHERE `id_pendaftar` = ?");
    $q->execute(['image/'.$namafile, $id_pendaftar]);
    header("Location: ../index.php");
}
?>