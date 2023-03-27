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
        <li class='content'><a href='controller_Transaksi.php'>Transaksi</a></li>
        <li class='content'><a href='../../public/logout.php'>Logout</a></li>
        </ul></nav>";

        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th colspan='2'>Action</th>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td class='id'>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama_distributor'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "<td>" . $row['telepon'] . "</td>";
            echo "<td class='edit'><a class='edit' href='controller_Distri.php?page=edit&id=" . $row['id'] . "'>Edit</a></td>";
            echo "<td class='delete'><a class='delete' href='controller_Distri.php?page=delete&id=" . $row['id'] . "'>Delete</a></td>";
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
        <td>Nama</td>
        <td>:</td>
        <td><input type='text' name='nama' /></td>
        </tr>";

        echo "
        <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type='text' name='alamat'/></td>
        </tr>";

        echo "
        <tr>
        <td>Telepon</td>
        <td>:</td>
        <td><input type='text' name='telepon'/></td>
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
        <td>Nama</td>
        <td>:</td>
        <td><input type='text' name='nama' value ='". $row['nama_distributor']."'/></td>
        </tr>";

        echo "
       
        <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type='text' name='alamat' value ='". $row['alamat']."'/></td>
        </tr>";

        echo "
        <tr>
        <td>Telepon</td>
        <td>:</td>
        <td><input type='text' name='telepon' value ='". $row['telepon']."'/></td>
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
