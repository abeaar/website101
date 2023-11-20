<?php
include "koneksi.php";
$id_film=$_POST['id_film'];
$nama =$_POST['nama'];
$genre =$_POST['genre'];
$query=mysqli_query($konek,"UPDATE film SET nama='$nama',genre='$genre' where id_film='$id_film'")
or die(mysqli_error($konek));
if($query)
{
header("location: page/admin.php");
}
else
{
echo "Proses Input gagal";
}
?>
