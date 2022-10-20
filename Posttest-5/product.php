<?php
include 'config.php';
$sql = "SELECT * FROM produk INNER JOIN aplikasi ON produk.id_produk = aplikasi.id_produk";
$query = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="produk_list.css">
</head>

<body style="background-color: #2596be;">

        <div class ="container"id="home">
            <div class="navbar" style="border-bottom: 3px solid var(--primary-color);">
                <h2 id = "judul" class = "logo"> LIST PRODUCT </h2>
                    <nav>
                        <ul>
                            <li><a href="index.php">Back To Home</a></li>
                        </ul>
                    </nav>
        </div>


    <table class = "content-table">
        <thead>
            <tr>
                <th>Nama Developer</th>
                <th>Kategori</th>
                <th>Nama Aplikasi</th>
                <th>Harga</th>
                <th>Tahun Rilis</th>
                <th>Kelola</th>
            </tr>
        </thead>
        <?php
            while ($data = mysqli_fetch_array($query)) {
                ?>
            <tbody>
                <tr>
                    <td><?php echo $data['nama_developer'] ?></td>
                    <td><?php echo $data['kategori'] ?></td>
                    <td><?php echo $data['nama_aplikasi'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><?php echo $data['tahun_rilis'] ?></td>
                    <td><a href ="edit.php?id=<?= $data['id_produk']?>">Edit</a> | <a href = "hapus.php?id=<?= $data['id_produk']?>">Hapus</a></td>
                </tr>
        <?php
            }
        ?>
            <tr >
                <td colspan = 6 align = center><a href="tambah.php">Tambah Data</a></td>
            </tr>
            </tbody>
    </table>
</body>

</html>