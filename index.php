<?php
require 'functions.php';
$produk = query("SELECT * FROM produk");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $produk = cari($_POST["keyword"]);
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Produk</h1>
        <br>
        <a href="tambah.php" class="btn btn-dark">Tambah data produk</a>
        <br><br>
        <table class="table" border="1px">
            <thead class="thead-dark text-center">
                <th scope="col">No.</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
            </thead>

            <?php $i = 1; ?>
            <?php foreach ($produk as $row) : ?>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $row["nama_produk"]; ?></td>
                    <td><?= $row["keterangan"]; ?></td>
                    <td><?= $row["harga"]; ?></td>
                    <td><?= $row["jumlah"]; ?></td>
                    <td class="text-center">
                        <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-dark">ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-dark" onclick="return confirm('yakin?');">hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>