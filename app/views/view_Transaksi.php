<?php

class View {
    public function index($data) {
        echo "<table border='1'>";
        echo "<tr>
        <td colspan='5'><a href='?page=tambah'>Tambah</a></td>
        </tr>";
        echo "<tr>
        <th>ID</th>
        <th>Costumer_id</th>
        <th>data_barang_id</th>
        <th>admin_id</th>
        <th>jumlah transaksi</th>
        <th>tanggal transaksi</th>
        <th>Action</th></tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['costumer_id'] . "</td>";
            echo "<td>" . $row['data_barang_id'] . "</td>";
            echo "<td>" . $row['admin_id'] . "</td>";
            echo "<td>" . $row['jumlah_transaksi'] . "</td>";
            echo "<td>" . $row['tanggal_transaksi'] . "</td>";
            echo "<td><a href='controller_Transaksi.php?page=edit&id=" . $row['id'] . "'>Edit</a> | <a href='controller_Transaksi.php?page=delete&id=" . $row['id'] . "'>Delete</a></td>";
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
            <td>costumer_id</td>
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
        $query = mysqli_query($conn2, "select * from costumer") or die (mysqli_error($conn2));
        echo " <select name='costumer_id'>";
        while($data = mysqli_fetch_array($query))
        {
            echo "<option value=$data[id]>$data[email] </option>";
        }

        echo "
                </select>
        </td>
        </tr>";

        //akhir atas

        //mulainya
        echo "
        <tr>
            <td>data barang id</td>
            <td>:</td>
            <td>";
      
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
            <td>costumer_id</td>
            <td>:</td>
            <td>";
        if ($conn2->connect_error) {
            die("Connection failed: " . $conn2->connect_error);
        }
        $query = mysqli_query($conn2, "select * from admin") or die (mysqli_error($conn2));
        echo " <select name='admin_id'>";
        while($data = mysqli_fetch_array($query))
        {
            echo "<option value=$data[id]>$data[name] </option>";
        }

        echo "
                </select>
        </td>
        </tr>";

        echo "
        <tr>
        <td>jumlah transaksi</td>
        <td>:</td>
        <td><input type='number' name='jumlah_transaksi' /></td>
        </tr>";


        echo "
        <tr>
        <td>tanggal transaksi</td>
        <td>:</td>
        <td><input type='date' name='tanggal_transaksi' /></td>
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
            <td>costumer_id</td>
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
        $query = mysqli_query($conn2, "select * from costumer") or die (mysqli_error($conn2));
        echo " <select name='costumer_id'>";
        while($data = mysqli_fetch_array($query))
        {
            echo "<option value=$data[id]>$data[email] </option>";
        }

        echo "
                </select>
        </td>
        </tr>";

        //akhir atas

        //mulainya
        echo "
        <tr>
            <td>data barang id</td>
            <td>:</td>
            <td>";
      
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
            <td>costumer_id</td>
            <td>:</td>
            <td>";
        if ($conn2->connect_error) {
            die("Connection failed: " . $conn2->connect_error);
        }
        $query = mysqli_query($conn2, "select * from admin") or die (mysqli_error($conn2));
        echo " <select name='admin_id'>";
        while($data = mysqli_fetch_array($query))
        {
            echo "<option value=$data[id]>$data[name] </option>";
        }

        echo "
                </select>
        </td>
        </tr>";

        echo "
        <tr>
        <td>jumlah transaksi</td>
        <td>:</td>
        <td><input type='number' name='jumlah_transaksi' /></td>
        </tr>";


        echo "
        <tr>
        <td>tanggal transaksi</td>
        <td>:</td>
        <td><input type='date' name='tanggal_transaksi' /></td>
        </tr>";

        echo "
        <tr colspan='3'>
            <td><input type='submit'/></td>
  
        </tr>";
     
        

        echo "</form></table>";
     
        


        }
    
}
}
