<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
        </nav>

        <div class="icons">
            <a onClick='alert("Silahkan login/registrasi terlebih dahulu jika ingin memasukkan barang ke keranjang")' style="text-decoration:none" href="#" class="fas fa-shopping-cart"></a>
            <a style="text-decoration:none; font-size:16px;" class="fa-sharp fa-solid fa-user" href="login.php"> Login</a>
        </div>
    </header>



    <!-- header select ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>TOKO SEPATU</h3>
            <span>Berbagai model sepatu yang menarik dan berkualitas </span>
            <p>Berlokasi di Jalan Trans Kalimantan Komplek Persada Raya 6 Jalur 2B No.5, Handil Bakti, Kalimantan Selatan, Indonesia.</p>
            <p>LOGIN SEBAGAI : <?=isset($_SESSION['name']) ? $_SESSION['name'] : "tamu"?></p>
            <a style="text-decoration:none" href="login.php" class="btn">shop now</a>
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
            <p>Selamat datang di situs resmi Toko Sepatu Indonesia di mana Anda dapat membeli berbagai macam jenis sepatu, mulai dari sepatu olahraga berkualitas hingga jenis sepatu lainnya. Toko Online Resmi Toko Sepatu Indonesia menyediakan produk terbaik mulai dari sepatu olahraga, dan sneaker, hingga aksesori olahraga lainnya untuk semua kebutuhan Anda. Tersedia berbagai macam sepatu yang cocok untuk setiap momen dan nyaman dipakai saat berolahraga.</p>
            <p> Di Toko Online Resmi Toko Sepatu Indonesia. Toko Sepatu Online Resmi terus memperbarui daftar produknya sehingga Anda dapat membeli koleksi berbagai macam sepatu trending dan terbaru. Temukan sepatu favorit Anda mulai dari sepatu untuk pria, wanita, dan anak-anak hanya di toko sepatu online resmi kami...</p>
        </div>

    </div>

</section>

<!-- products section starts -->

<section class="products" id="products">

    <h1 class="heading"> Products </h1>

    <div class="box-container">

        <div class="box">
            <!-- <span class="discount">-10%</span> -->
            <div class="image">
                <img src="assets/img/adidass.jpeg">
                <div class="icons">
                    <a onClick='alert("Silahkan login/registrasi terlebih dahulu jika ingin memasukkan barang ke keranjang")' style="text-decoration:none" href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>Adidas</h3>
                <div class="price"> 21.000,00 <span>25.000,00</span> </div>
            </div>
        </div>

        <div class="box">
            <!-- <span class="discount">-15%</span> -->
            <div class="image">
                <img src="assets/img/puma.png">
                <div class="icons">
                    <a onClick='alert("Silahkan login/registrasi terlebih dahulu jika ingin memasukkan barang ke keranjang")' style="text-decoration:none" href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>Puma</h3>
                <div class="price"> 22.000,00 <span>26.000,00</span> </div>
            </div>
        </div>

        <div class="box">
            <!-- <span class="discount">-5%</span> -->
            <div class="image">
                <img src="assets/img/converse.png">
                <div class="icons">
                    <a onClick='alert("Silahkan login/registrasi terlebih dahulu jika ingin memasukkan barang ke keranjang")' style="text-decoration:none" href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>Converse</h3>
                <div class="price"> 21.000,00 <span>26.000,00</span> </div>
            </div>
        </div>

        <div class="box">
            <!-- <span class="discount">-20%</span> -->
            <div class="image">
                <img src="assets/img/ventela.jpeg">
                <div class="icons">
                    <a onClick='alert("Silahkan login/registrasi terlebih dahulu jika ingin memasukkan barang ke keranjang")' style="text-decoration:none" href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>Ventela</h3>
                <div class="price"> 18.000,00 <span>21.000,00</span> </div>
            </div>
        </div>

        <div class="box">
            <!-- <span class="discount">-17%</span> -->
            <div class="image">
                <img src="assets/img/chaoyun.jpeg">
                <div class="icons">
                    <a onClick='alert("Silahkan login/registrasi terlebih dahulu jika ingin memasukkan barang ke keranjang")' style="text-decoration:none" href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>Chaoyun</h3>
                <div class="price"> 15.000,00 <span>18.000,00</span> </div>
            </div>
        </div>

        <div class="box">
            <!-- <span class="discount">-3</span> -->
            <div class="image">
                <img src="assets/img/vans.jpeg">
                <div class="icons">
                    <a onClick='alert("Silahkan login/registrasi terlebih dahulu jika ingin memasukkan barang ke keranjang")' style="text-decoration:none" href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>Vans</h3>
                <div class="price"> 24.000,00<span>28.000,00</span> </div>
            </div>
        </div>

        <div class="box">
            <!-- <span class="discount">-18%</span> -->
            <div class="image">
                <img src="assets/img/Sorella.jpeg">
                <div class="icons">
                    <a onClick='alert("Silahkan login/registrasi terlebih dahulu jika ingin memasukkan barang ke keranjang")' style="text-decoration:none" href="#" class="cart-btn" >add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>Sorella</h3>
                <div class="price"> 23.000,00 <span>25.000,00</span> </div>
            </div>
        </div>

        <div class="box">
            <!-- <span class="discount">-19%</span> -->
            <div class="image">
                <img src="assets/img/rupaka.jpeg">
                <div class="icons">
                    <a  onClick='alert("Silahkan login/registrasi terlebih dahulu jika ingin memasukkan barang ke keranjang")' style="text-decoration:none" href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>Rupaka</h3>
                <div class="price"> 21.000,00 <span>26.000,00</span> </div>
            </div>
        </div>

      
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
            <img src="assets/img/Fatimah Azzahra Maulida.jpeg">
            <div class="user-info">
                <h3>Fatimah Azzahra Maulida</h3>
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
            <img src="assets/img/Maysarah.jpeg">
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
            <img src="assets/img/Maisya Puspita Sari.jpeg">
            <div class="user-info">
                <h3>Maisya Puspita Sari</h3>
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
            <img src="assets/img/Risma Wulandari.jpeg">
            <div class="user-info">
                <h3>Risma Wulandari</h3>
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
        </div>
        <p>Saya salah pilih ukuran, jadinya kekecilan.</p>
        <br></br><br></br><br></br><br></br><br></br>
        <div class="user">
            <img src="assets/img/Najwan.jfif">
            <div class="user-info">
                <h3>M. Najwan Nur Iman</h3>
                <span>sad customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
        </div>
        <p>Tiba-tiba barang datang kerumah, ternyata anak saya yang memesan tanpa pengetahuan saya.</p>
        <br></br><br></br><br></br><br></br>
        <div class="user">
            <img src="assets/img/Aspi.jfif">
            <div class="user-info">
                <h3>Aspi Raihan</h3>
                <span>angry customer</span>
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
            <a style="text-decoration:none" class="fa-solid fa-square-phone">  0852-4433-2211</a>
            <a style="text-decoration:none" class="fa-solid fa-envelope"> tokosepatu_XII@gmail.com</a>
            <a style="text-decoration:none" class="fa-sharp fa-solid fa-location-dot"> Jl. Trans Kalimantan Komplek Persada Raya 6 Jalur 2B No.5, Handil Bakti, Kalimantan Selatan, Indonesia.</a>
        </div>

    </div>

    <div class="credit">
        created by <span> <b>kELOMPOK 4</b> </span> | all rights reserved </div>

</section>

<!-- footer section ends -->

</body>
</html>
