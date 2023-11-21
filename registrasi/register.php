<?php
// Connection to the database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrasi";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. You can now <a href='login.php'>login</a>.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
