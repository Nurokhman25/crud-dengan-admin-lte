<?php
include "koneksi.php";

$nama   		= $_POST['nama'];
$tanggal_lahir 	= $_POST['tanggal_lahir'];
$alamat   		= $_POST['alamat'];


mysqli_query($conn,"insert into user(nama,tanggal_lahir,alamat)
VALUE('$nama','$tanggal_lahir','$alamat')")or die(mysql_error());
header('location:index.php?page=list_berita');
?>