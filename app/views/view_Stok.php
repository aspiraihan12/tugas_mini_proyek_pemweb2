<style><?php include "../views/css/styleAdmin.css"; ?></style>
<?php

class View {
    public function index($data) {
        echo "<nav><ul>
        <li class='content'><a href='?page=tambah'>Tambah</a></li>
        <li class='content'><a href='controller_Databarang.php'>Data Barang</a></li>
        <li class='content'><a href='controller_Stok.php'>Stok</a></li>
        <li class='content'><a href='controller_Costumer.php'>Costumer</a></li>
        <li class='content'><a href='controller_Distri.php'>Distributor</a></li>
<<<<<<< HEAD
        <li class='content'><a href='controller_Transaksi.php' target='_blank'>Transaksi</a></li>
=======
        <li class='content'><a href='controller_Transaksi.php'>Transaksi</a></li>
>>>>>>> b461e31152a1c3eb89bd3b6f592a1b2e4cefbe47
        <li class='content'><a href='../../public/logout.php'>Logout</a></li>
        </ul></nav>";

        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>data barang id</th>
        <th>Total Stok</th>
<<<<<<< HEAD
        <th colspan='2'>Action</th></tr>";
=======
        <th colspan='2'>Action</th>";
>>>>>>> b461e31152a1c3eb89bd3b6f592a1b2e4cefbe47
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td class='id'>" . $row['id'] . "</td>";
            echo "<td class='id'>" . $row['data_barang_id'] . "</td>";
            echo "<td class='id'>" . $row['total_stok'] . "</td>";
            echo "<td class='edit'><a class='edit' href='controller_Stok.php?page=edit&id=" . $row['id'] . "'>Edit</a></td>";
            echo "<td class='delete'><a class='delete' href='controller_Stok.php?page=delete&id=" . $row['id'] . "'>Delete</a></td>";
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

?>