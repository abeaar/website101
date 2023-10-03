<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$angka = $_POST['angka'];
$menu = $_POST['menu']; //faktorial dan kuadrat
  if($menu == 'kuadrat'){
    for ($i=1; $i<=$angka;$i++ ){
          $hasil[$i] = $i*$i;
        }
      } else if($menu == 'faktorial'){
    
        $base=1;
        for ($i=1; $i<=$angka;$i++ ){
          $base = $base* $i;
          $hasil[$i] = $base;
      }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="cssnyaoutput.css">
  </head>
  <body>

  
    <div class="home">
      <div class="content">

        <h3><?php
        echo "Nama saya $nama NIM $nim <br>";
        echo "Angka = $angka <br>" ;
        ?>
        </h1>
        <p> 
        <?php
          echo "Ini adalah barisan $menu <br>";
          foreach ($hasil as $hasilfinal) {
          echo $hasilfinal. " ";
          }
        ?>
        </p>
      </div>
    </div>
    <footer class="footer fixed-bottom">
    <h3>
      &copy; kata mamah, harus dapet A
    </h3>
    </footer>


  </body>


 
</html>




