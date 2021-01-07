<?php
include "koneksi.php";
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$userinput = $_POST['userinput'];
$userupdate = $_POST['userupdate'];
mysqli_query($koneksi,"INSERT INTO penduduk (nik,nama,jenis_kelamin,alamat,userinput,userupdate) VALUES ('$nik','$nama','$jenis_kelamin','$alamat','$userinput','$userupdate')");
header('location:index.php');
?>