<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data transaksi </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <a href="admin.php">kembali</a>
    <h2>Menampilkan Data transaksi</h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>id</td>
                <td>email</td>
                <td>produk</td>  
                <td>jumlah</td>
                <td>total</td>                  
            </tr>
        </thead>
        <?php
        
        $no = 1;
        $query = mysqli_query($koneksi, 'SELECT * FROM transaksi');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['produk'] ?></td>
                <td><?php echo $data['jumlah'] ?></td>
                <td><?php echo $data['total'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>