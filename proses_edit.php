

<?php
include "koneksi.php";
$id=$_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$userupdate = $_POST['userupdate'];
$userinput = $_POST['userinput'];

if ($userupdate==$userinput){
mysqli_query($koneksi,"UPDATE penduduk SET nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' where id='$id' ");
}else{mysqli_query($koneksi,"UPDATE penduduk SET nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', userupdate='$userupdate' where id='$id' ");
}
header('location:index.php');
?>