<?php
session_start();
require "";
$email = $_SESSION["email"];
$dataTransaksi = ("SELECT * FROM transaksi WHERE email = '$email'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/datatables.min.css"/>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/datatables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
<a href="product.php" class="btn btn-outline-primary">Kembali</a>
<br><br>
    <table class="table table-bordered" id="example">
        <thead>
            <tr class="table-primary text-center">
                <th>No.</th>
                <th>Keterangan</th>
                <th>Total</th>
                <!-- <th>Aksi</th> -->
            </tr>
        </thead>
        <tbody>
    <?php
        $i = 1;
        foreach($dataTransaksi as $transaksi):
    ?>
            <tr>
                <td class="text-center"><?=$i?></td>
                <td>
                    <?php 
                    $stringProduk = explode("|", $transaksi["produk"]); 
                    $stringJumlah = explode("|", $transaksi["jumlah"]); 
                    for($j = 0; $j < count($stringProduk)-1; $j++){
                        echo "<b>$stringProduk[$j]</b>" . " x " . $stringJumlah[$j];
                        echo "<br>";
                    }
                    ?>
                </td>
                <td>
                    Rp. <?=$transaksi["total"]?>
                </td>
                <!-- <td class="text-center"><a class="btn btn-sm btn-success" href="">Cetak Transaksi</a></td> -->
            </tr>        
    <?php 
        $i++;
        endforeach 
    ?>
        </tbody>

    </table>
</div>
<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        paging: false,
				searching: false,
				buttons: [
            {
                extend: 'print',
				footer: true,
				exportOptions: {
					stripHtml: false,
                    columns: [ 0, 1, 2]
                },
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' );
            /*            .prepend(
                            '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'    
                        ); */

                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
            }
        ]
    } );
} );
</script>
</body>
</html>