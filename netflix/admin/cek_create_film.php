<?php
include "koneksi.php";
$nama =$_POST['nama'];
$genre =$_POST['genre'];

$query=mysqli_query($konek,"INSERT INTO film VALUES('','$nama','$genre')") or die(mysqli_error($konek));

if($query)
{
header("location: page/admin.php");
}
else
{
echo "Proses Input gagal";
}
?> 