<html>

    <head>
        <title>Pemrograman Web IF-G</title>
    </head>

    <body>


    
        <h1>Tugas PHP</h1>
        <form action="output.php" method="POST">
            <label>Nama :</label>
            <br>
            <input type="text" name="nama">
            <br>
            <br>
            <label>Nim :</label> <br>
            <input type="text" name="nim">
            <br>
            <br>
            <label>Angka :</label><br>
            <input type="text" name="angka">
            <br>
            <br>
            <label>Menu</label>
            <select name="menu" id="">
                <option value="kuadrat">Barisan kuadrat</option>
                <option value="faktorial">Barisan faktorial</option>
            </select>
            <br>
            <br>
            <input type="submit" value="Submit"> 
            <input type="submit" value = "Reset">
        </form>
    </body>

</html>