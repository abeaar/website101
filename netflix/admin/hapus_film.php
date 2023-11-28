<?php
include "../koneksi.php";
$nomor =$_GET['nomor'];
$query=mysqli_query($konek,"DELETE FROM film where
nomor=$nomor");
if($query)
{
header("location: data_film.php");
}
else
{
echo "Proses Input gagal";
}
?>
