<!doctype html>
<?php
session_start();
if(empty($_SESSION['username']))
{
header("location:index.php?pesan=belum_login");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        *{
            font-family: poppins;
        }
    </style>
    <?php $i=1?>
  </head>
  <body>
    <div class="container">

        <div class="header mt-5">
            <h1>home</h1>
            <hr></hr>
            <h5>selamat datang <?php echo $_SESSION['username'];?></h5>
        </div>

        <div class="tombol">
          <div class="btn-group mt-5 mb-2">
            <button type="button" class="btn btn-primary btn-sm"><a href="create.php" style="text-decoration:none; color:white">tambah</a></button> 
            <button type="button" class="btn btn-danger btn-sm"><a href="logout.php"  style="text-decoration:none; color:white">logout</a></button> 
          </div>
        </div>
        <div class="tabel">
          
          <div class="table-responsive">
            <table class="table align-middle" style="text-decoration: none;">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>nama</th>
                  <th>genre</th>               
                </tr>
              </thead>
              <tbody>
                <?php
                include '../koneksi.php';
                $query=mysqli_query($konek,"select * from film");
                while($data=mysqli_fetch_array($query))
                { ?>
              <tr>
                <td> <?php echo $i++ ?></td>
                <td> <?php echo $data['nama']; ?></td>
                <td> <?php echo $data['genre']; ?> </td>

                  <?php }?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>