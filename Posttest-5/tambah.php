<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA</title>
    <link rel="stylesheet" href="style-1.css">
</head>
<body>
    <div class = "center">
        <h1>Tambah Data</h1>
        <form id="register" method="post" action = "">
            <div class="txt_field">
                <input type="text" name ="nama_developer">
                <span></span>
                <label for="nama_developer">Nama Developer</label>
            </div>
            <div class="txt_field">
                <input type="text" name ="kategori">
                <span></span>
                <label for="kategori">Kategori</label>
            </div>
            <div class="txt_field">
                <input type="text" name ="nama_aplikasi">
                <span></span>
                <label for="nama_aplikasi">Nama Aplikasi</label>
            </div>
            <div class="txt_field">
                <input type="text" name ="harga">
                <span></span>
                <label for="harga">Harga</label>
            </div>
            <div class="txt_field">
                <input type="text" name ="tahun_rilis">
                <span></span>
                <label for="tahun_rilis">Tahun Rilis</label>
            </div>
        <input type="submit" name = "simpan" value="Simpan">

        </form>
    </div>
    <!-- <form action = "" method = "post">
        <label for="nama_developer">Nama Developer</label>
        <input type="text" name ="nama_developer">
    <br>
        <label for="kategori">Kategori</label>
        <input type="text" name ="kategori">
    <br>
        <label for="nama_aplikasi">Nama Aplikasi</label>
        <input type="text" name ="nama_aplikasi">
    <br>
        <label for="harga">Harga</label>
        <input type="text" name ="harga">
    <br>
        <label for="tahun_rilis">Tahun Rilis</label>
        <input type="text" name ="tahun_rilis">
    <br>
    <input type="submit" value ="Simpan">
    </form> -->

    <?php
    include 'config.php';
    if($_POST) { 
        $sql = "INSERT INTO produk (nama_developer, kategori, harga) VALUES ('{$_POST['nama_developer']}', '{$_POST['kategori']}', '{$_POST['harga']}')";
        $query = mysqli_query($koneksi, $sql);

        $sql = "SELECT max(id_produk) AS last_id FROM produk LIMIT 1";
        $query = mysqli_query($koneksi, $sql);

        $data = mysqli_fetch_array($query);
        $last_id = $data['last_id'];
        
        $sql = "INSERT INTO aplikasi (id_produk, nama_aplikasi, tahun_rilis) VALUES ('$last_id', '{$_POST['nama_aplikasi']}', '{$_POST['tahun_rilis']}')";
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

