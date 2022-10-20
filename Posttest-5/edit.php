<?php
include 'config.php';

$id = (int) $_GET['id'];

$sql = "SELECT * FROM produk INNER JOIN aplikasi ON produk.id_produk = aplikasi.id_produk WHERE produk.id_produk = '$id'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
    <link rel="stylesheet" href="style-1.css">
</head>
<body>
<div class="center">
        <h1>Edit Data</h1>
        <form id="register" method="post" action = "">
            <input type = "hidden" name="id" value = "<?= $data['id_produk']?>">
            <div class="txt_field">
                <input type="text" name ="nama_developer" value = "<?= $data['nama_developer'] ?>">
                <span></span>
                <label for="nama_developer">Nama Developer</label>
            </div>
            <div class="txt_field">
                <input type="text" name ="kategori" value = "<?= $data['kategori'] ?>">
                <span></span>
                <label for="kategori">Kategori</label>
            </div>
            <div class="txt_field">
                <input type="text" name ="nama_aplikasi" value = "<?= $data['nama_aplikasi']?>">
                <span></span>
                <label for="nama_aplikasi">Nama Aplikasi</label>
            </div>
            <div class="txt_field">
                <input type="text" name ="harga" value = "<?= $data['harga']?>">
                <span></span>
                <label for="harga">Harga</label>
            </div>
            <div class="txt_field">
                <input type="text" name ="tahun_rilis" value = "<?= $data['tahun_rilis']?>">
                <span></span>
                <label for="tahun_rilis">Tahun Rilis</label>
            </div>
        <input type="submit" name = "simpan" value="Simpan">

        </form>
    </div>

    <!-- <form action = "" method = "post">
        <input type = "hidden" name="id" value = "?= $data['id_produk']?>">
        <label for="nama_developer">Nama Developer</label>
        <input type="text" name ="nama_developer" value = "?= $data['nama_developer'] ?>">
    <br>
        <label for="kategori">Kategori</label>
        <input type="text" name ="kategori" value = "?= $data['kategori'] ?>">
    <br>
        <label for="nama_aplikasi">Nama Aplikasi</label>
        <input type="text" name ="nama_aplikasi" value = "?= $data['nama_aplikasi']?>">
    <br>
        <label for="harga">Harga</label>
        <input type="text" name ="harga" value = "?= $data['harga']?>">
    <br>
        <label for="tahun_rilis">Tahun Rilis</label>
        <input type="text" name ="tahun_rilis" value = "?= $data['tahun_rilis']?>">
    <br>
    <input type="submit" value ="Simpan">
    </form> -->

    <?php
    if ($_POST){
        $sql = "UPDATE produk SET nama_developer = '{$_POST['nama_developer']}',
        kategori = '{$_POST['kategori']}',harga = '{$_POST['harga']}' WHERE id_produk = '{$_POST['id']}'";

        $query = mysqli_query($koneksi, $sql);

        $sql = "UPDATE aplikasi SET nama_aplikasi = '{$_POST['nama_aplikasi']}',
        tahun_rilis = '{$_POST['tahun_rilis']}' WHERE id_produk = '{$_POST['id']}'";
        $query = mysqli_query($koneksi, $sql);

        if ($query) {
            echo "Data Berhasil Disimpan";
            header('Location: product.php');
        } else{
            echo "Data Gagal Disimpan".mysqli_error();
        }
    }
    ?>
</body>
</html>