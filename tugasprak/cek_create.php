<?php
include "koneksi.php";
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$nohp =$_POST['nohp'];
$query=mysqli_query($konek,"INSERT INTO data_orang VALUES('','$nama','$alamat','$nohp')") or die(mysqli_error($konek));

if($query)
{
header("location: home.php");
}
else
{
echo "Proses Input gagal";
}
?> 