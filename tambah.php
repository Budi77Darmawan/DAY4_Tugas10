<?php
require "function.php";

if (isset ($_POST["submit"]) ){

    if ( tambah ($_POST)>0 ) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
    </head>

    <body>
        <h2>Tambah Data Produk</h2>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="np">Nama Produk</label>
                    <input type="text" name="nama_produk" id="np"
                    required>
                </li>
                <li>
                    <label for="ket">Keterangan</label>
                    <input type="text" name="keterangan" id="ket"
                    required>
                </li>
                <li>
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga"
                    required>
                </li>
                <li>
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah"
                    required>
                </li>
                
            </ul>
            <button type = "submit" name="submit">Tambah Data!</button>
        </form>
    </body>
</html>