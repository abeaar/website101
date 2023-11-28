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
        .main{
          height: 40vh;
          display: flex;
          gap: 2vh;
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
    $nomor=$_GET['nomor'];
    $query=mysqli_query($konek,"SELECT * from film where nomor =$nomor");
    $data =mysqli_fetch_array($query);
    ?>
    <div class="container">
      <?php include 'navbar.php'?>
      <div class="home">

        <div class="header mt-5">
          <h1>Edit Data</h1>
        </div>
        <hr></hr>
        
        <td border="4px"></td>
        <form action="cek_edit_film.php" method="POST">
          
          <input type="hidden" name="nomor" value="<?php echo $data['nomor']; ?>">
          
          <div class="username mt-4">
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" value=<?php echo $data['nama']; ?>>
            </div>
          </div>
          
          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">genre</label>
              <input type="text" name="genre" class="form-control" value=<?php echo $data['genre']; ?>>
            </div>
          </div>
          <div class="genre mt-4">
            <div class="mb-3">
              <label class="form-label">link foto</label>
              <input type="text" name="linkfoto" class="form-control" value=<?php echo $data['linkfoto']; ?>>
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