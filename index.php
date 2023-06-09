<?php
session_start();
require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $conn = new Koneksi_db();
    $conn = $conn ->getKoneksi();
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["username"] = $username;
        header("Location: home.php");
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Watch List</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
        background: linear-gradient(to right, #FFD700, #FFA500);
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 50px;
        background-color: #333;
        text-align: center;
        line-height: 50px;
        font-size: 14px;
        color: #f2f2f2;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .col-img {
        width: 50%;
        padding-right: 20px;
    }
    .col-img img {
        max-width: 100%;
    }
    .containerlogin {
        width: 50%;
        padding: 20px;
        background-color: #fff;
    }
    .containerlogin h3 {
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input {
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .form-group button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .form-group a {
        text-decoration: none;
        color: #4CAF50;
        margin-left: 10px;
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="col-img">
            <img src="img/concept.png" alt="">
        </div>
        <div class="containerlogin"> 
            <h3>Halaman Login</h3>  
            <form action="index.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button><br>
                <br>
                <a>Belum Punya akun?</a>
                <a href="signin.php">Daftar</a>
            </div>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2023 RaniUAS</p>
    </footer>
</body>
</html>