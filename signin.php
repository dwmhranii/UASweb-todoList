<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background: url(img/bg.png);
        font-family: Arial, sans-serif;
        padding: 0;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        }

        .signup-form {
        max-width: 400px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .signup-form h2 {
        text-align: center;
        }

        .signup-form label {
        display: block;
        margin-bottom: 10px;
        }

        .signup-form input[type="text"],
        .signup-form input[type="email"],
        .signup-form input[type="password"] {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 15px;
        }

        .signup-form input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        }

        .signup-form .signup-success,
        .signup-form .signup-error {
        text-align: center;
        margin-bottom: 10px;
        padding: 5px;
        }

        .signup-form .signup-success {
        color: green;
        }

        .signup-form .signup-error {
        color: red;
        }

        .center-link {
            text-align: center;
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
    </style>
</head>
<body>
    <?php
    $signup_success = false;
    $signup_error = false;

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = new mysqli('localhost', 'root', '', 'uas');
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $signup_success = true;
            header("Location: home.php");
            exit();
        } else {
            $signup_error = true;
        }

        $conn->close();
    }
    ?>

    <div class="signup-form">
        <h2>Sign Up</h2>
        <?php if ($signup_success) { ?>
            <p class="signup-success">Sign up berhasil!</p>
        <?php } elseif ($signup_error) { ?>
            <p class="signup-error">Error: Gagal melakukan sign up.</p>
        <?php } ?>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" name="submit" value="Sign Up">
        </form>
        <div class="center-link">
        <a href="index.php" >Login</a>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2023 RaniUAS</p>
    </footer>
</body>
</html>
