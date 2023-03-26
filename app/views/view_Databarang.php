<?php

class View {
    public function index($data) {
        echo "<table border='1'>";
        echo "<tr>
        <td colspan='5'><a href='?page=tambah'>Tambah</a></td>
        </tr>";
        echo "<tr>
        <th>ID</th>
        <th>Nama</th>
        <th>harga_barang</th>
        <th>img</th>
        <th>distributor id</th>
        <th>Action</th></tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama_barang'] . "</td>";
            echo "<td>" . $row['harga_barang'] . "</td>";
            echo "<td>" . $row['img'] . "</td>";
            echo "<td>" . $row['distributor_id'] . "</td>";
            echo "<td><a href='controller_Databarang.php?page=edit&id=" . $row['id'] . "'>Edit</a> | <a href='controller_Databarang.php?page=delete&id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    public function create(){
        
        echo "
        <form  method='post' action='?page=store'>
        <table border='1'>";
        echo "
        <tr>
        <td>Nama barang</td>
        <td>:</td>
        <td><input type='text' name='nama_barang' /></td>
        </tr>";

        echo "
        <tr>
        <td>harga_barang</td>
        <td>:</td>
        <td><input type='text' name='harga_barang'/></td>
        </tr>";

        echo "
        <tr>
        <td>img</td>
        <td>:</td>
        <td><input type='text' name='img'/></td>
        </tr>";

        echo "
        <tr>
            <td>distributor_id</td>
            <td>:</td>
            <td>";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "toko_sepatu";
        $conn2 = new mysqli($servername, $username, $password, $dbname);
        if ($conn2->connect_error) {
            die("Connection failed: " . $conn2->connect_error);
        }
        $query = mysqli_query($conn2, "select * from distributor") or die (mysqli_error($conn2));
        echo " <select name='distributor_id'>";
        while($data = mysqli_fetch_array($query))
        {
            echo "<option value=$data[id]>$data[nama_distributor] </option>";
        }

        echo "
                </select>
        </td>
        </tr>";

        echo "
        <tr colspan='3'>
            <td><input type='submit'/></td>
  
        </tr>";
     
        

        echo "</form></table>";
    }

    public function edit($data){
        foreach ($data as $row) {
        echo "
        <form  method='post' action='?page=update'>
        <input type='hidden' name='id' value ='". $row['id']."'/>
        <table border='1'>";
        echo "
        <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type='text' name='nama_barang' value ='". $row['nama_barang']."'/></td>
        </tr>";

        echo "
       
        <tr>
        <td>harga_barang</td>
        <td>:</td>
        <td><input type='text' name='harga_barang' value ='". $row['harga_barang']."'/></td>
        </tr>";


        echo "
        <tr>
        <td>img</td>
        <td>:</td>
        <td><input type='text' name='img' value ='". $row['img']."'/></td>
        </tr>";

        echo "
        <tr>
        <td>distributor_id</td>
        <td>:</td>
        <td>";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "toko_sepatu";
        $conn2 = new mysqli($servername, $username, $password, $dbname);
        if ($conn2->connect_error) {
            die("Connection failed: " . $conn2->connect_error);
        }
        $query = mysqli_query($conn2, "select * from distributor") or die (mysqli_error($conn2));
        echo " <select name='distributor_id'>";
        while($data = mysqli_fetch_array($query))
        {
            echo "<option value=$data[id] >$data[nama_distributor] </option>";
        }

        // echo "
        //         </select>
        // </td>
        // <td><input type='text' name='distributor_id' value ='". $row['distributor_id']."'/></td>
        // </tr>";
        echo "
                </select>
        </td>
        </tr>";

        

        echo "
        <tr colspan='3'>
        <td><input type='submit'/></td>
   
        </tr>";
     
        

        echo "</form></table>";
        }
    
}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <h1 class="navbar-brand ps-3" href="index.html">Toko Sepatu</h1>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Current</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                Data barang
                            </a>
                            

                            <!-- side navbar -->
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Admin
                            </a>

                            <a class="nav-link" href="customer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                                Customer
                            </a>

                            <a class="nav-link" href="transaksi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calculator"></i></div>
                                Transaksi
                            </a>

                            <a class="nav-link" href="stok.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                                Stok
                            </a>
                            
                            <a class="nav-link" href="distri.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-dolly-flatbed"></i></div>
                                Distribusi
                            </a>
                            
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Kelompok 4 MVC</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>