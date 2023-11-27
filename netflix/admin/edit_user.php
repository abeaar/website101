<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>page edit</title>
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
    <?php
    include '../koneksi.php';
    $id=$_GET['id'];
    $query=mysqli_query($konek,"SELECT * from user where id =$id");
    $data =mysqli_fetch_array($query);
    ?>
    <?php include 'navbar.php'?>
    <div class="home">

      <div class="container">
        <div class="header mt-5">
          <h1>Edit Data</h1>
        </div>
        <hr></hr>
        
        
        <td border="4px"></td>
        
        <form action="cek_edit_user.php" method="POST">
          
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
          
          <div class="username mt-4">
            <div class="mb-3">
              <label class="form-label">username</label>
              <input type="text" name="username" class="form-control" value=<?php echo $data['username']; ?>>
            </div>
          </div>
          
          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">email</label>
              <input type="text" name="email" class="form-control" value=<?php echo $data['email']; ?>>
            </div>
          </div>
          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">password</label>
              <input type="text" name="password" class="form-control" value=<?php echo $data['password']; ?>>
            </div>
          </div>
          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">role</label>
              <input type="text" name="role" class="form-control" value=<?php echo $data['role']; ?>>
            </div>
          </div>
          
          
          <button type="submit" class="btn btn-primary" name="submit"> Send</button>
          
        </form>
        
      </div>
    </div>
      <?php include'footer.php'?>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>