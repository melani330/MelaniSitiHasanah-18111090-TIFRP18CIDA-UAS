<?php
require_once "koneksi.php";
$id_register= $_POST["id_reg"];
echo $id_register;

$q = $database_connection->prepare("DELETE FROM `data_pendaftar` WHERE `data_pendaftar`.`id` = ?");
$q->execute([$id_register]);
header("Location: ../index.php");
?>