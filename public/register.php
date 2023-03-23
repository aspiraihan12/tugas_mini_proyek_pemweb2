<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');


session_start();

if (isset($_SESSION['name'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    echo "<script>alert('$email')</script>";

    // if ($password == $cpassword) {
    $sql = "SELECT * FROM costumer WHERE email='$email'";
    $conn = new mysqli('localhost', 'root', '', 'toko_sepatu');
    $result = mysqli_query($conn, $sql);
    echo "<script>alert('bruh 1 selcect')</script>";
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO costumer (name, email, password)
                    VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Selamat, registrasi berhasil!')</script>";
            $name = "";
            $email = "";
            $_POST['password'] = "";
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/style_login.css">

    <title>Register</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="name" name="name" value="" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
    </div>
</body>

</html>