<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="tugas_mini_proyek_pemweb2/app/views/css/style_dataBarang.css">
    <title>Data Barang</title>
</head>
<body style="background-color:#FFF">
<div class="container">
    <?php
    class View {
        public function index($data) {
    ?>
        <table style="width:900px; border: 1px solid black ; border-collapse:collapse">
            <h1 class="mb-3">Data Barang</h1>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: blue; color: white">
                Tambah Barang
            </button>

            <tr style=" border: 1px solid black; border-collapse:collapse">
                <th style="width:30px; border: 1px solid black">ID</th>
                <th class="text-center" style=" border: 1px solid black">Nama Barang</th>
                <th class="text-center" style=" border: 1px solid black">Harga Barang</th>
                <th class="text-center" style=" border: 1px solid black">Foto Barang</th>
                <th class="text-center" style=" border: 1px solid black">Distributor ID</th>
                <th class="text-center" style=" border: 1px solid black">Action</th>
            </tr>

        <?php
        foreach ($data as $row) {
            ?>
            <tr style=" border: 1px solid black; border-collapse:collapse">
                <td style=" border: 1px solid black"> <?php $row['id']?></td>
                <td style=" border: 1px solid black"> <?php $row['nama_barang'] ?></td>
                <td style=" border: 1px solid black"> <?php $row['harga_barang'] ?></td>
                <td style=" border: 1px solid black"> <?php $row['img'] ?></td>
                <td style=" border: 1px solid black"> <?php $row['distributor_id'] ?></td>
                <td style="text-align: center; border: 1px solid black"> <a href='controller_Databarang.php ?page=edit&id= <?php $row['id'] ?>'>Edit</a> | <a href='controller_Databarang.php?page=delete&id=<?php $row['id'] ?>'>Delete</a></td>
            </tr>
            <?php
        }?>
        </table>

        <?php
    }

    public function create(){
        ?>
        <div>
            <form  method='post' action=<?php'?page=store'?>>
            <table border='1'>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type='text' name='nama_barang'></td>
                </tr>

                <tr>
                    <td>Harga Barang</td>
                    <td>:</td>
                    <td><input type='text' name='harga_barang'/></td>
                </tr>

                <tr>
                    <td>Foto Barang</td>
                    <td>:</td>
                    <td><input type='text' name='img'/></td>
                </tr>

                <tr>
                    <td>Distributor_ID</td>
                    <td>:</td>
                    <td>
                    <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "toko_sepatu";
                            $conn2 = new mysqli($servername, $username, $password, $dbname);
                            if ($conn2->connect_error) {
                                die("Connection failed: " . $conn2->connect_error);
                            }
                            $query = mysqli_query($conn2, "select * from distributor") or die (mysqli_error($conn2))
                            ?>
                            <select name='distributor_id'>
                            <?php
                            while($data = mysqli_fetch_array($query))
                            {?>
                               <option value=<?php $data[id] ?> > <?php $data[nama_distributor]?></option>
                               <?php
                            }?>

                            </select>
                    </td>
                </tr>

                <tr colspan='3'>
                    <td><input type='submit'/></td>
                </tr>
     
        </form></table>";

        <?php
    }

    public function edit($data){
        foreach ($data as $row) {
            ?>

        <form  method='post' action='?page=update'>
        <input type='hidden' name='id' value =<?php $row['id']?>/>
        <table border='1'>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type='text' name='nama_barang' value =<?php $row['nama_barang']?>/></td>
        </tr>
       
        <tr>
            <td>harga_barang</td>
            <td>:</td>
            <td><input type='text' name='harga_barang' value =<?php $row['harga_barang']?>/></td>
        </tr>

        <tr>
            <td>img</td>
            <td>:</td>
            <td><input type='text' name='img' value ='". $row['img']."'/></td>
        </tr>

        <tr>
            <td>distributor_id</td>
            <td>:</td>
            <td>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "toko_sepatu";
                $conn2 = new mysqli($servername, $username, $password, $dbname);
                if ($conn2->connect_error) {
                    die("Connection failed: " . $conn2->connect_error);
                }
                $query = mysqli_query($conn2, "select * from distributor") or die (mysqli_error($conn2))?>
                <select name='distributor_id'>
                <?php
                while($data = mysqli_fetch_array($query))
                {?>
                    <option value= <?php $data[id] ?> > <?php $data[nama_distributor] ?></option>
                <?php
                }?>
                </select>
                </td>
                <td><input type='text' name='distributor_id' value =<?php $row['distributor_id']?>/></td>
                </tr>

                <tr colspan='3'>
                    <td><input type='submit'/></td>
                </tr>
            
        </form></table>";
        <?php
        }
            
    }
}
?>

</body>
</html>