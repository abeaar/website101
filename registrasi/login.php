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

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["username"] = $username;
        header("Location: welcome.php"); // Redirect to a welcome page
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="home.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
        <a href="register.php">sign up</a>
</body>
</html>
