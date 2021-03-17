<?php
$koneksi=mysqli_connect("localhost","root","","program_sederhana");
//check connection
if(mysqli_connect_errno()){
	echo "Koneksi database gagal:".mysqli_connect_errno();
}
?>