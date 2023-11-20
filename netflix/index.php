
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

        <h2>log in</h2>
            <form method="POST" action="cek_login.php">
                <div class="form-control">
                    <input type="text" name="username" required >
                    <label>Email or Phone Number</label>
                </div>
                <div class="form-control">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
            <button type="submit" value="LOGIN">log In</button>

            <div class="formfooter">
                 <p style="color: white; text-align: left; display: inline-block;">Don't have an account ?</p>
                <a href="signup.php" style="color: red; text-align: right; display: inline-block; float: right;">Sign in</a>
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