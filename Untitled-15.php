<!DOCTYPE html>
<html>
    <head>
        <h1>Show Table</h1>
    </head>

    <body>
        <h3>Data barang</h3>
        <table border="1" class="table">
            <tr>
                <th>id barang</th>
                <th>nama barang</th>
                <th>tanggal terima</th>
                <th>stok barang</th>
                <th>harga</th>
            </tr>
            <?php
            include "Untitled-14.php";
            $query_mysql =mysqli_query($koneksi,"SELECT * FROM barang")or die(mysqli_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
          ?>
            <tr>
                <td><?php echo $data ['id_barang']; ?></td>
                <td><?php echo $data ['nama_barang']; ?></td>
                <td><?php echo $data ['tanggal_terima']; ?></td>
                <td><?php echo $data ['stok_barang']; ?></td>
                <td><?php echo $data ['harga']; ?></td>
            </tr>
            <?php } ?>

        </table>
        
    </body>
</html>
