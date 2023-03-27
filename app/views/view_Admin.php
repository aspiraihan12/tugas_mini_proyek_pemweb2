
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
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th colspan='2'>Action</th></tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td class='id'>" . $row['id'] . "</td>";
<<<<<<< HEAD
            echo "<td class='id'>" . $row['name'] . "</td>";
            echo "<td class='id'>" . $row['email'] . "</td>";
            echo "<td class='id'>" . $row['password'] . "</td>";
=======
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
>>>>>>> b461e31152a1c3eb89bd3b6f592a1b2e4cefbe47
            echo "<td class='edit'><a class='edit' href='controller_admin.php?page=edit&id=" . $row['id'] . "'>Edit</a></td>";
            echo "<td class='delete'><a class='delete' href='controller_admin.php?page=delete&id=" . $row['id'] . "'>Delete</a></td>";
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
