<?php
include "../koneksi.php";
$nama =$_POST['nama'];
$genre =$_POST['genre'];
$linkfoto=$_POST['linkfoto'];

$query=mysqli_query($konek,"INSERT INTO film VALUES('','$nama','$genre','$linkfoto')") or die(mysqli_error($konek));

if($query)
{
header("location: data_film.php");
}
else
{
echo "Proses Input gagal";
}
?> 

