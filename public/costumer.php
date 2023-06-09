<?php
if(!isset($_SESSION['name']))
{
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" type ="text/css" href="css/style_index.css">
</head>
<body>
    
    <!-- header select start -->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a style="text-decoration:none" href="" class="logo">TOKO SEPATU</a>

        <nav class="navbar">
            <a style="text-decoration:none" href="#home">Home</a>
            <a style="text-decoration:none" href="#about">About</a>
            <a style="text-decoration:none" href="#products">Products</a>
            <a style="text-decoration:none" href="#review">Review</a>
            <!-- <a style="text-decoration:none" href="transaksi.php">Transaksi</a> -->
        </nav>

        <div class="icons">
            <a onClick='alert("Fitur Belum tersedia!!!, silahkan memesan lewat nohub")' style="text-decoration:none" href="#" class="fas fa-shopping-cart"></a>
            <a style="text-decoration:none" href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')" class="fas fa-sign-out"></a>
        </div>
    </header>



    <!-- header select ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>TOKO SEPATUs</h3>
            <span>Berbagai model sepatu yang menarik dan berkualitas</span>
            <p>Berlokasi di Jalan Trans Kalimantan Komplek Persada Raya 6 Jalur 2B No.5, Handil Bakti, Kalimantan Selatan, Indonesia.</p>
            <p>LOGIN SEBAGAIz : <?=isset($_SESSION['name']) ? $_SESSION['name'] : "tamu"?><?= isset($_SESSION['admin']) && $_SESSION['admin']==1 ? ", admin" : ", customerz"?></p>
            <a style="text-decoration:none" href="#products" class="btn">shop now</a>
        </div>
        <div class="video-container">
            <video src="assets/img/shoes.mov" loop autoplay muted></video>
        </div>

    </section>

     <!-- home select ends -->

     <!-- about section start -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">
        <div class="video-container">
            <video src="assets/img/download_1.mov" loop autoplay muted></video>
             <h3>TOKO SEPATU</h3>
        </div>

        <div class="content">
            <h3>why choose us</h3>
            <p>Selamat datang di situs resmi adidas Indonesia di mana Anda dapat membeli perlengkapan dan aksesori olahraga berkualitas. Toko Online Resmi adidas Indonesia menyediakan produk terbaik mulai dari sepatu olahraga, dan sneaker, hingga aksesori olahraga lainnya untuk semua kebutuhan Anda. Tersedia berbagai macam sepatu yang cocok untuk setiap momen dan nyaman dipakai saat berolahraga.</p>
            <p> Di Toko Online Resmi adidas Indonesia. Toko Online Resmi adidas terus memperbarui daftar produknya sehingga Anda dapat membeli koleksi sepatu, pakaian, aksesori olahraga terbaru kami. Temukan sepatu favorit Anda mulai dari sepatu untuk pria, wanita, dan anak-anak hanya di toko online resmi kami...</p>
        </div>

    </div>

</section>

<!-- products section starts -->

<section class="products" id="products">

    <h1 class="heading"> Products </h1>

    <div class="box-container">

        <!-- <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="assets/img/adidass.jpeg" alt="">
                <div class="icons">
                    <a onClick='alert("Silahkan login/regis jika ingin memasukkan barang kekeranjang")' style="text-decoration:none" href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>Adidas</h3>
                <div class="price"> 21.000,00 <span>25.000,00</span> </div>
            </div>
        </div>  -->
    <?php 
    $link = mysqli_connect("localhost", "root", "", "toko_sepatu");
    $query = mysqli_query($link, "SELECT * FROM data_barang"); 
    while ($row = $query->fetch_assoc()) { ?>
        <div class="box">
            <div class="image">
                <img src="assets/img/<?= $row["img"]?>" alt="">
                <dsiv class="icons">
                    <a onClick='alert("Silahkan login/regis jika ingin memasukkan barang kekeranjang")' style="text-decoration:none" href="#" class="cart-btn">add to cart</a>
                </dsiv>
            </div>
            <div class="content">
                <h3><?= $row["nama_barang"] ?></h3>
                <div class="price"> <?= $row["harga_barang"] ?> <span>25.000,00</span> </div>
            </div>
        </div>
    <?php } ?>


        


    </div>

</section>

<!-- products section ends -->

<!-- review section starts -->

<section class="review" id="review">

<h1 class="heading"> customer's <span>review</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Tokonya sangat lengkap dan bagus. Baik dari keramahan penjual, barang-barang yang berkualitas dan sangat lengkap.</p>
        <br></br><br></br><br></br>
        <div class="user">
            <img src="IMG/pic-1.png" alt="">
            <div class="user-info">
                <h3>Ara anak Piyik</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Tokonya sangat cantik, lucu, dan lengkap. Sepatunya berkualitas tinggi, sangat bagus dan nyaman digunakan.</p>
        <br></br><br></br><br></br>
        <div class="user">
            <img src="IMG/pic-2.png" alt="">
            <div class="user-info">
                <h3>Maysarah</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Sudah langganan ditoko ini. Pelayanannya bagus dan ramah, membuat saya menjadi senang belanja disini.</p>
        <br></br><br></br><br>
        <div class="user">
            <img src="IMG/pic-3.png" alt="">
            <div class="user-info">
                <h3>Maisya</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Tokonya sangat lengkap dan bagus. Barang-barang yang dijual berkualitas. Bakal jadi langganan belanja di toko ini.</p>
        <br></br><br></br><br></br>
        <div class="user">
            <img src="IMG/pic-1.png" alt="">
            <div class="user-info">
                <h3>Rismawndri</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>

</section>

<!-- review section ends -->

<!-- footer section starts -->

<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>contact info</h3>
            <a style="text-decoration:none" href="#" class="fa-solid fa-square-phone">  0822-5553-6627</a>
            <a style="text-decoration:none" href="#" class="fa-solid fa-envelope"> azhpetshop@gmail.com</a>
            <a style="text-decoration:none" href="#" class="fa-sharp fa-solid fa-location-dot"> Jl. Brigjen Jalan Hasan Basri, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</a>
            <img src="IMG/payment.png" alt="">
        </div>

    </div>

    <div class="credit">
        created by <span> <b>kELOMPOK 4</b> </span> | all rights reserved </div>

</section>

<!-- footer section ends -->

</body>
</html>
