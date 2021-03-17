<?php
include 'koneksi.php';
$Id=$_POST['Id'];
$Nama=$_POST['Nama'];
$Alamat=$_POST['Alamat'];
$Pekerjaan=$_POST['Pekerjaan'];

mysqli_query("UPDATE user1 SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id'");

header("location:index.php?pesan=update");
?>