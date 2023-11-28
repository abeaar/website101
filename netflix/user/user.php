<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(empty($_SESSION['username']))
{
header("location:index.php?pesan=belum_login");
}
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/n.jpeg" type="image/png">
  <title>NetFlix</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/media_query.css">

  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
</head>

<body>




  <!--
    - main container
  -->
  <div class="container">

    <!--
      - #HEADER SECTION
    -->

    <header class="">
      <div class="navbar">

        <!--
          - menu button for small screen
        -->
        <button class="navbar-menu-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>


        <a href="#" class="navbar-brand">
          <img src="../img/logo.png"  style="width: 100px;" alt="">
        </a>

        <!--
          - navbar navigation
        -->

        <nav class="">
          <ul class="navbar-nav">

            <li> <a href="#" class="navbar-link">Home</a> </li>

          </ul>
        </nav>

        <!--
          - search and sign-in
        -->

        <div class="navbar-actions">

          <form action="#" class="navbar-form">


            <button class="navbar-form-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

            <button class="navbar-form-close">
              <ion-icon name="close-circle-outline"></ion-icon>
            </button>
          </form>


          <!--
            - search button for small screen
          -->

        

          <a href="#" class="navbar-signin">
            <span><?php echo $_SESSION['username'];?></span>
            <ion-icon name="log-in-outline"></ion-icon>
          </a>

        </div>

      </div>
    </header>





    <!--
      - MAIN SECTION
    -->
    <main>

      <!--
        - #BANNER SECTION
      -->
      <section class="banner">
        <div class="banner-card">

          <img src="./assets/images/John-Wick-3.jpg" class="banner-img" alt="">

          <div class="card-content">
            <div class="card-info">

              <div class="genre">
                <ion-icon name="film"></ion-icon>
                <span>Action/Thriller</span>
              </div>

              <div class="year">
                <ion-icon name="calendar"></ion-icon>
                <span>2019</span>
              </div>

              <div class="duration">
                <ion-icon name="time"></ion-icon>
                <span>2h 11m</span>
              </div>

              <div class="quality">4K</div>

            </div>

            <h2 class="card-title">John Wick: Chapter 3 - Parabellum</h2>
          </div>

        </div>
      </section>





      <!--
        - #MOVIES SECTION
      -->
      <section class="movies">

        <!--
          - filter bar
        -->
        <div class="filter-bar">

          <div class="filter-dropdowns">

            
          </div>

          <div class="filter-radios">

            <input type="radio" name="grade" id="featured" checked>
            <label for="featured">Featured</label>

            <input type="radio" name="grade" id="popular">
            <label for="popular">Popular</label>

            <input type="radio" name="grade" id="newest">
            <label for="newest">Newest</label>

            <div class="checked-radio-bg"></div>

          </div>

        </div>


        <!--
          - movies grid
        -->

        <div class="movies-grid">
          <?php
          include '../koneksi.php';
          $query=mysqli_query($konek,"select * from film");
          while($data=mysqli_fetch_array($query))
          { ?>
        
          <div class="movie-card">
            <div class="card-head">
              <img src="<?php echo $data['linkfoto'];?>" alt="" class="card-img">
              <div class="card-overlay">
                <div class="bookmark">
                </div>
              </div>
            </div>
            <div class="card-body">
              <h3 class="card-title"><?php echo $data['nama'];?></h3>
              <div class="card-info">
                <span class="genre"><?php echo $data['genre'];?></span>
  
              </div>
            </div>
          </div>
          <?php }?>


      </section>



    <!--
      - FOOTER SECTION
    -->
    <footer>

      <div class="footer-content">

        <div class="footer-brand">
          <img src="../img/logo.png"  style="width: 100px;" alt="">
          <br>
          <p class="slogan">Movies & TV Shows, Online cinema,
            Movie database HTML Template.</p>


          <div class="social-link">

            <a href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-tiktok"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>

          </div>
        </div>


        <div class="footer-links">
          <ul>

            <h4 class="link-heading">Netflix</h4>

            <li class="link-item"><a href="#">About us</a></li>
            <li class="link-item"><a href="#">My profile</a></li>
            <li class="link-item"><a href="#">Pricing plans</a></li>
            <li class="link-item"><a href="#">Contacts</a></li>

          </ul>

          <ul>

            <h4 class="link-heading">Browse</h4>

            <li class="link-item"><a href="#">Live Tv</a></li>
            <li class="link-item"><a href="#">Live News</a></li>
            <li class="link-item"><a href="#">Live Sports</a></li>
            <li class="link-item"><a href="#">Streaming Library</a></li>

          </ul>

          <ul>

            <li class="link-item"><a href="#">TV Shows</a></li>
            <li class="link-item"><a href="#">Movies</a></li>
            <li class="link-item"><a href="#">Kids</a></li>
            <li class="link-item"><a href="#">Collections</a></li>

          </ul>

          <ul>

            <h4 class="link-heading">Help</h4>

            <li class="link-item"><a href="#">Account & Billing</a></li>
            <li class="link-item"><a href="#">Plans & Pricing</a></li>
            <li class="link-item"><a href="#">Supported devices</a></li>
            <li class="link-item"><a href="#">Accessibility</a></li>

          </ul>
        </div>

      </div>

      <div class="footer-copyright">

       

      </div>

    </footer>

  </div>





  <!--
    - custom js link
  -->
  <script src="./assets/js/main.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>