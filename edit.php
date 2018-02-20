<?php
	include('koneksi.php');
	
	$id=$_GET['id'];
	
	$nama=$_POST['nama'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$alamat=$_POST['alamat'];
	
	mysqli_query($conn,"update user set nama='$nama', tanggal_lahir='$tanggal_lahir', alamat='$alamat' where userid='$id'");
	header('location:index.php?page=list_berita');

?>