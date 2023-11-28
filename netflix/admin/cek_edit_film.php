<?php
include "../koneksi.php";
$nomor=$_POST['nomor'];
$nama =$_POST['nama'];
$genre =$_POST['genre'];
$linkfoto =$_POST['linkfoto'];
$query=mysqli_query($konek,"UPDATE film SET nama='$nama',genre='$genre',linkfoto='$linkfoto' where nomor='$nomor'")
or die(mysqli_error($konek));
if($query)
{
header("location: data_film.php");
}
else
{
echo "Proses Input gagal";
}
?>
