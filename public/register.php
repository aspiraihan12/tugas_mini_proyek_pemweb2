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
<?php
// echo __DIR__;
// $path = "../app/controllers/controller_Costumer.php";
// echo $path;

require_once "../app/controllers/controller_Costumer.php";

if(isset($_POST["submit"])){
    // <script>
    //     Swal.fire(
    //               'Berhasil',
    //               '1 User Berhasil Ditambahkan',
    //               'success'
    //            )
    // </script>
  if(register() > 0){
    echo "<script>
    alert('Registrasi berhasil!');  
    document.location.href='login.php'  
               Swal.fire(
                  'Berhasil',
                  '1 User Berhasil Ditambahkan',
                  'success'
               );
                
         </script>";
  }else{
    echo "<script>Swal.fire(
        'warning',
        'Woops! Email Sudah Terdaftar.',
        'warning'
     )</script>";
  }
}
// setInterval(()=>{
//     document.location.href='login.php'  
//     },3000);
?>



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