<?php
@include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($konek, $_POST['username']);
    $email = mysqli_real_escape_string($konek, $_POST['email']);
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $select = "SELECT * FROM user where email = '$email' && password = '$password' ";
    $result = mysqli_query($konek, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exist!';
    } else {
        $insert = "INSERT INTO  user (name, email, password, role) VALUES ('$name, '$email, '$password', '$role')";
        mysqli_query($konek, $insert);
        header('location: index.php');
    }; 
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas AKhir Praktikum web </title>
    <link rel="stylesheet" href="cssindex.css">
</head>
<body>
    <nav>
        <img src="img/logo.png" alt="logo" width="170">
    </nav>

    <div class="form-wrapper">

        <h2>Sign up</h2>
            <form method="POST" action="cek_login.php">
                <div class="form-control">
                    <input type="text" name="username" required >
                    <label> username</label>
                </div>
                <div class="form-control">
                    <input type="email" name="email" required >
                    <label> email</label>
                </div>
                <div class="form-control">
                    <input type="text" name="password" required >
                    <label> password</label>
                </div>
                
            <button type="submit" value="LOGIN">Register now</button>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class= "error-msg">'.$error.'</span>';
                };
            };
            ?>

            <div class="formfooter">
                 <p style="color: white; text-align: left; display: inline-block;">already have account ?</p>
                <a href="index.php" style="color: red; text-align: right; display: inline-block; float: right;">log in</a>
            </div>
            <br>
            <br>
            <h5 style="color:white">

                <?php
            if(isset($_GET['pesan']))
            {
                if($_GET['pesan'] == "gagal")
                {
                    echo "Login gagal! username dan password salah!";
                }else if($_GET['pesan'] == "logout")
                
                {
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login")
                {
                    
                }
            }
            ?>
            <h5>
        </form>
    </div>

</body>
</html>