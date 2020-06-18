<?php
require "function.php";

$id = $_GET["id"];

$produk = query("SELECT * FROM produk WHERE id = $id")[0];


if (isset ($_POST["submit"]) ){

    if ( ubah($_POST)>0 ) {
        echo "
        <script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data</title>
    </head>

    <body>
        <h2>Ubah Data Produk</h2>

        <form action="" method="post">
            <input type="hidden" name="id" value = "<?= $produk["id"] ?>">
            <ul>
                <li>
                    <label for="np">Nama Produk</label>
                    <input type="text" name="nama_produk" id="np"
                    required value = "<?= $produk["nama_produk"] ?>">
                </li>
                <li>
                    <label for="ket">Keterangan</label>
                    <input type="text" name="keterangan" id="ket"
                    required value = "<?= $produk["keterangan"] ?>">
                </li>
                <li>
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga"
                    required value = "<?= $produk["harga"] ?>">
                </li>
                <li>
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah"
                    required value = "<?= $produk["jumlah"] ?>">
                </li>
                
            </ul>
            <button type = "submit" name="submit">Ubah Data!</button>
        </form>
    </body>
</html>