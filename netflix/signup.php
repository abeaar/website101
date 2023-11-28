<?php
@include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user (username, email, password, role) VALUES ('$username', '$email','$password', 'user')";

    if ($konek->query($sql) === TRUE) {
        header("location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $konek->error;
    }
 
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
            <form method="POST" action="signup.php">
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