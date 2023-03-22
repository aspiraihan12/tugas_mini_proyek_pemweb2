<?php

class View {
    public function index($data) {
        echo "<table border='1'>";
        echo "<tr>
        <td colspan='5'><a href='?page=tambah'>Tambah</a></td>
        </tr>";
        echo "<tr>
        <th>ID</th>
        <th>data barang id</th>
        <th>Total Stok</th>
        <th>Action</th></tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['data_barang_id'] . "</td>";
            echo "<td>" . $row['total_stok'] . "</td>";
            echo "<td><a href='controller_Stok.php?page=edit&id=" . $row['id'] . "'>Edit</a> | <a href='controller_Stok.php?page=delete&id=" . $row['id'] . "'>Delete</a></td>";
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
            <td>data barang id</td>
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
        $query = mysqli_query($conn2, "select * from data_barang") or die (mysqli_error($conn2));
        echo " <select name='data_barang_id'>";
        while($data = mysqli_fetch_array($query))
        {
            echo "<option value=$data[id]>$data[id] </option>";
        }

        echo "
                </select>
        </td>
        </tr>";

        echo "
        <tr>
        <td>Total Stok</td>
        <td>:</td>
        <td><input type='number' name='total_stok'/></td>
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
        <td>Total Stok</td>
        <td>:</td>
        <td><input type='number' name='total_stok' value ='". $row['total_stok']."'/></td>
        </tr>";

        echo "
        <tr>
        <td>Data barang id</td>
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
        $query = mysqli_query($conn2, "select * from data_barang") or die (mysqli_error($conn2));
        echo " <select name='data_barang_id'>";
        while($data = mysqli_fetch_array($query))
        {
            echo "<option value=$data[id]>$data[id] </option>";
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
    
}
}
