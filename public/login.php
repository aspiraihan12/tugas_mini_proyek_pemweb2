<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
// include 'config.php';

// error_reporting(0);

session_start();

if (isset($_SESSION['name'])) {
    header("Location: costumer.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $conn = new mysqli('localhost', 'root', '', 'toko_sepatu');
    var_dump($email, $password);
    $sql = "SELECT * FROM costumer WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];
        echo "<script>alert('DATA : $row)</script>";
        $_SESSION['email'] = $row['email'];
        header("Location: costumer.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/style_login.css">

    <title>Login</title>
</head>

<body>
    <div class="alert alert-warning" role="alert">
        <?php isset($_SESSION['error']) ? $_SESSION['error'] : "" ?>
    </div>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <!-- <input type="email" placeholder="Email" name="email" value="<?php //echo $email; 
                                                                                    ?>" required> -->
                <input type="email" placeholder="Email" name="email" value="" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>

</html>