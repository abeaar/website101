<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="cssuser.css">
    <style>
      .container h1{
       font-weight: 600 ; 
      }
    </style>
    <?php $i=1?>
  </head>
  <body>
   <?php include 'navbar.php'?>
            <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/godzilla.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/godzilla.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/godzilla.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <br>
          <br>
          
          <div class="container mt-5">
            <h1 style="text-align :center">Watch Our Collection</h1>
          </div>
          <br>
          <br>
          <br>
          
          <div class="container">
            <div class="row g-5">
              
              <?php
                include '../koneksi.php';
                $query=mysqli_query($konek,"select * from film");
                while($data=mysqli_fetch_array($query))
                { ?>
              
              <?php }?>
              <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img src="<?php echo $data['linkfoto'];?>" style="width:100% ;" class="card-img-top">
              <div class="card-body">
                <h5 class="card-tittle"><?php echo $data['nama'];?></h5>
              </div>
          </div>
        </div>
              
              <div class="container">
                
              </div>

      </div>
    </div>


        
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
    </html>