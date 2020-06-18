<?php
require "function.php";

$produkk = query ("SELECT * FROM produk")

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Budi Darmawan</title>
    </head>

    <body>
        <h2>PRODUK AJA!</h2>

        <a href="tambah.php">Tambahkan Produk</a>
        <br><br>

        <table border="1" cellpadding="1" cellspasing="0">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>

            <?php $i = 1 ?>
            <?php foreach( $produkk as $row ) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row['id']; ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $row['id']; ?>" onclick = "return confirm('Yakin?');">Hapus</a>
                </td>
                <td><?= $row["nama_produk"]; ?></td>
                <td><?= $row["keterangan"]; ?></td>
                <td><?= $row["harga"]; ?></td>
                <td><?= $row["jumlah"]; ?></td>
                
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>

        </table>
    </body>
</html>