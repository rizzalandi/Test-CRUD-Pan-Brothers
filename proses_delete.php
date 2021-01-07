<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$penduduk=mysqli_query($koneksi,"Delete FROM penduduk WHERE id='$id'");
	header('location:index.php');
?>