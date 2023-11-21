<?php
include "koneksi.php";
$nomor=$_POST['nomor'];
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$nohp =$_POST['nohp'];
$query=mysqli_query($konek,"UPDATE data_orang SET nama='$nama', alamat='$alamat',nohp='$nohp' where nomor='$nomor'")
or die(mysqli_error($konek));
if($query)
{
header("location: home.php");
}
else
{
echo "Proses Input gagal";
}
?>
