<?php
include "../koneksi.php";
$id =$_GET['id'];
$query=mysqli_query($konek,"DELETE FROM user where
id=$id");
if($query)
{
header("location: data_user.php");
}
else
{
echo "Proses hapus gagal";
}
?>
