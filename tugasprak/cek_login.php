<?php
session_start();

// menghubungkan dengan koneksi
include "koneksi.php"; // Include the database connection file

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$query = "SELECT * FROM data_admin WHERE username='$username' AND password='$password'";
$result = $konek->query($query);

// menghitung jumlah data yang ditemukan
$cek = $result->num_rows;

if ($cek > 0) {
    // Ambil data admin dari hasil query
    $adminData = $result->fetch_assoc();

    // Set session data
    $_SESSION['username'] = $adminData['username'];
    $_SESSION['role'] = $adminData['role']; // Assuming there is a 'role' column in the data_admin table

    // Redirect based on user role
    if ($_SESSION['role'] == 'admin') {
        header("location:home_admin.php"); // Change 'admin_home.php' to the actual admin page
    } elseif ($_SESSION['role'] == 'user') {
        header("location:home_user.php"); // Change 'user_home.php' to the actual user page
    } else {
        // Handle unexpected role
        header("location:index.php?pesan=error");
    }
} else {
    // Handle login failure
    header("location:index.php?pesan=gagal");
}

// Close the database connection
$konek->close();
?>
