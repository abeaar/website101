<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="punyagw.css">
  <title>Hello, world!</title>
</head>

<body>
  <div class="home">
    <div class="content">
      <h1>Tugas Praktikum</h1>
      <hr>
      <h2>123220109</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, doloremque saepe id mollitia eum est
        consequatur nam perferendis, illo quod eos tenetur, natus obcaecati assumenda vel! Exercitationem sapiente et
        laudantium.
      </p>
      <p>jadi tugas kali ini gw disuruh buat perulangan berupa faktorial dan juga kuadrat. Awalnya ez sih tapi gatau ntr
        waktu kuis kaya gimana. btw keren ga nich home page gw </p>

        <form action="output.php" method="POST">
          <div class="formbody">

            <div class="formnama">
              <p>Nama :</p>
              <input type="text" class="form-control" name="nama">
            </div>
            <div class="formnim">
              <p>nim :</p>
              <input type="text" class="form-control" name="nim">
            </div>
            <div class="formangka">
              <p>angka :</p>
              <input type="text" class="form-control" name="angka">
            </div>
          </div>
          <div class="formfooter">

            <div class="metode">
              <select name="menu" class="form-select">
                <option value="kuadrat">kuadrat</option>
                <option value="faktorial">faktorial</option>
              </select>
            </div>
            
            <div class="submit">
              <input type="submit" value="Submit">
            </div>
            
          </div>

        </form>
      
    </div>
  </div>
  
  <footer class="footer fixed-bottom">
    <h3>
      &copy; kata mamah, harus dapet A
    </h3>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>