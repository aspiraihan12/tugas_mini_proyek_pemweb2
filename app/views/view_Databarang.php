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
