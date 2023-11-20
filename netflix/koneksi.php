<?php
$hostname = "localhost"; //hostname
$username = "root"; //username untuk login ke mysql
$password = ""; //password untuk login ke mysql
$database = "netflix"; //nama database
$konek= mysqli_connect($hostname, $username, $password, $database) or die("koneksi gagal");

?>