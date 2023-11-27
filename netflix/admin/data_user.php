<!doctype html>
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
        .home{
            margin-top: 10vh;
            margin-bottom: 10vh;
        }
    </style>  
</head>
  <body>
  <?php $i=1;?>
  <?php  include 'navbar.php'?>
<div class="home">

    <div class="container mt-5">
        <div class="header">
            <h1>list User</h1>
        </div>
        <div class="tombol">
            <div class="btn-group mt-5 mb-2">
                <button type="button" class="btn btn-primary btn-sm"><a href="create_user.php" style="text-decoration:none; color:white">tambah</a></button> 
            </div>
        </div>
        
        <div class="tabel">
            <div class="table-responsive">
                <table class="table align-middle" style="text-decoration: none;">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>username</th>
                            <th>password</th>               
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                include '../koneksi.php';
                $query=mysqli_query($konek,"select * from user");
                while($data=mysqli_fetch_array($query))
                { ?>
              
              <tr>
                  <td> <?php echo $i++ ?></td>
                  <td> <?php echo $data['username']; ?></td>
                  <td> <?php echo $data['password']; ?> </td>
                  <td>
                      <a href=edit_user.php?id=<?php echo $data['id'];?> style="text-decoration:none;">edit</a> |
                      <a href=hapus_user.php?id=<?php echo $data['id'];?> style="text-decoration:none" onClick="return confirm('Apakah anda yakin ingin menghapus tersebut??')">delete</a></td>
                      <?php }?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<?php include'footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>