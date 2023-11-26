<?php
include "../koneksi.php";
$id_film =$_GET['id_film'];
$query=mysqli_query($konek,"DELETE FROM film where
id_film=$id_film");
if($query)
{
header("location: admin.php");
}
else
{
echo "Proses Input gagal";
}
?>
