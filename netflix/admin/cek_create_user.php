<?php
include "../koneksi.php";
$username =$_POST['username'];
$email =$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];

$query=mysqli_query($konek,"INSERT INTO user VALUES('','$username','$email','$password','$role')") or die(mysqli_error($konek));

if($query)
{
header("location: data_user.php");
}
else
{
echo "Proses Input gagal";
}
?> 

