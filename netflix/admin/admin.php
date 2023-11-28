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
        .header h1{
          color: black;
          font-weight: 600;
        }
        .header h2{
          color: red;
          font-weight: 750;
        }
        .main{
          display: flex;
          gap: 2vh;
        }
        .home{
          margin-top: 10vh;
          margin-bottom: 20vh;
        }
        body{
          height: 200vh;

        }
   
    </style>
    <?php $i=0; $j=0?>
  </head>
  <body>
    <?php include'navbar.php'?>
    <div class="home">
      
      <div class="container mt-5 ">
        <div class="header mt-5">
          <h1>Welcome, </h1> <h2><?php echo $_SESSION['username'];?></h2> <h1>At Admin Page</h1> 
          <hr></hr>
        </div>
        <p>About our NETFLIX :</p>
        <div class="main">
          <div class="kartu">
            <div class="card mt-2" style="width: 10rem; ">
              <div class="card-body">
                <h5 class="card-title">Total Film : </h5>
                <?php
                include '../koneksi.php';
                $query=mysqli_query($konek,"select * from film");
                while($data=mysqli_fetch_array($query)){ ?> 
                <?php $i++; } echo $i?>    
              </div>
            </div>
          </div>
          <div class="kartu2">
            <div class="card mt-2" style="width: 10rem;">
              <div class="card-body">
                <h5 class="card-title">Total User : </h5>
                <?php
                include '../koneksi.php';
                $query=mysqli_query($konek,"select * from user");
                while($data=mysqli_fetch_array($query)){ ?> 
                <?php $j++; } echo $j?>    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
      <?php include'footer.php'?>
      
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>