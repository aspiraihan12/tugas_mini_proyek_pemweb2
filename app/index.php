<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
// include 'config.php';

// error_reporting(0);

session_start();

// if (isset($_SESSION['name'])) {
//     header("Location: controllers/controller_Databarang.php");
// }

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $conn = new mysqli('localhost', 'root', '', 'toko_sepatu');
    var_dump($email, $password);
    $sql = "SELECT * FROM costumer WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        // echo "<script>alert('DATA : $row)</script>";
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        if ($row['is_admin']==1){
            $_SESSION['admin'] = true;
            echo '<script language="javascript">';
            echo 'alert("message successfully sent ADMIN")';
            echo '</script>';
            header("Location: ../app/controllers/controller_Databarang.php");
        }else{
            $_SESSION['admin'] = false;
            echo '<script language="javascript">';
            echo 'alert("message successfully sent")';
            echo '</script>';
            header("Location: ../public/costumer.php");
        }
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        header("Location: login.php");
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../public/css/style_login.css">

    <title>Login</title>
</head>

<body>
    <div class="alert alert-warning" role="alert">
        <?php isset($_SESSION['error']) ? $_SESSION['error'] : "" ?>
    </div>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Admin</p>
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
           
        </form>
    </div>
</body>

</html>