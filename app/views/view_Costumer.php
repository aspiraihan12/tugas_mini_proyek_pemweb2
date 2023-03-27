<style><?php include "../views/css/styleAdmin.css"; ?></style>
<?php

class View {
    public function index($data) {
        echo "<table border='1'>";
        echo "<tr>
        <td colspan='10'>
        <a href='?page=tambah'>Tambah</a>
        <a href='controller_Databarang.php'>Data Barang</a>
        <a href='controller_Stok.php'>Stok</a>
        <a href='controller_Costumer.php'>Costumer</a>
        <a href='controller_Distri.php'>Distributor</a>
        <a href='controller_Transaksi.php'>Transaksi</a>
        <a href='../../public/logout.php'>Logout</a>
        </td>
        </tr>";
        echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th></tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td><a href='controller_Costumer.php?page=edit&id=" . $row['id'] . "'>Edit</a> | <a href='controller_Costumer.php?page=delete&id=" . $row['id'] . "'>Delete</a></td>";
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
        <td>name</td>
        <td>:</td>
        <td><input type='text' name='name' /></td>
        </tr>";

        echo "
        <tr>
        <td>email</td>
        <td>:</td>
        <td><input type='text' name='email'/></td>
        </tr>";


        echo "
        <tr>
        <td>password</td>
        <td>:</td>
        <td><input type='text' name='password'/></td>
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
        <td>name</td>
        <td>:</td>
        <td><input type='text' name='name' value ='". $row['name']."'/></td>
        </tr>";

        echo "
       
        <tr>
        <td>email</td>
        <td>:</td>
        <td><input type='text' name='email' value ='". $row['email']."'/></td>
        </tr>";


        echo "
        <tr>
        <td>password</td>
        <td>:</td>
        <td><input type='text' name='password' value ='". $row['password']."'/></td>
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
