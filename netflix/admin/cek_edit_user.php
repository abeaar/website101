<?php
include "../koneksi.php";
$id=$_POST['id'];
$username =$_POST['username'];
$email =$_POST['email'];
$password =$_POST['password'];
$role =$_POST['role'];
$query=mysqli_query($konek,"UPDATE user SET username='$username',email='$email',password='$password', role='$role' where id='$id'")
or die(mysqli_error($konek));
if($query)
{
header("location: data_user.php");
}
else
{
echo "Proses Input gagal";
}
?>
