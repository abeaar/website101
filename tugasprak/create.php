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
    </style>
  </head>

  <body>
    <div class="container">
        <div class="header mt-5">
            <h1>Add Data</h1>
        </div>
        <hr></hr>

        <td border="4px"></td>

      <form method="POST" action="cek_create.php">
        
          <div class="username mt-4">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="abraaaarr">
              </div>
        </div>

        <div class="alamat mt-4">
            <div class="mb-3">
                <label class="form-label">alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="saturnuusss">
              </div>
        </div>

        <div class="nohp mt-4">
            <div class="mb-3">
                <label class="form-label">no hp</label>
                <input type="text" name="nohp" class="form-control" id="exampleFormControlInput1" placeholder="0888111333">
              </div>
        </div>

        <div class="button mt-4">
          <button type="submit" class="btn btn-primary" name="submit" value="kirim"> send </button>
        </div>
      </form>
        
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>