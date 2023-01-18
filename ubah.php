<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data produk berdasarkan id
$produk = query("SELECT * FROM produk WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
    }
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

    <title>Ubah</title>
</head>

<body>
    <div class="container">
        <h1>Ubah data produk</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $produk["id"]; ?>">
            <div class="form-group">
                <label for="nama_produk">Nama Produk : </label>
                <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="<?= $produk["nama_produk"]; ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan :</label>
                <textarea name="keterangan" class="form-control" id="keterangan" cols="30" rows="10"><?= $produk["keterangan"]; ?></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga :</label>
                <input type="number" class="form-control" name="harga" id="harga" value="<?= $produk["harga"]; ?>">
            </div>
            <div class="form-group"><label for="jumlah">Jumlah :</label> <br>
                <input type="number" class="form-control" name="jumlah" id="jumlah" value="<?= $produk["harga"]; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-dark">Ubah Data!</button>
        </form>
        <br><br>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>