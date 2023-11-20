<?php
// File: login.php

session_start();
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan username dan password
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($konek, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Set session untuk menyimpan informasi user yang sedang login
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Redirect ke halaman sesuai dengan peran (user atau admin)
            if ($_SESSION['role'] == 'admin') {
                header('Location: page/admin.php');
            } else {
                header('Location: page/user.php');
            }
            exit();
        } else {
            $error_message = "Username atau password salah.";
        }
    } else {
        $error_message = "Terjadi kesalahan dalam eksekusi query.";
    }
}

?>