<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style-1.css">
</head>


<body>
    <div class = "center">
        <h1>Data Yang Teregistrasi</h1>
        <?php
        if(isset($_POST['simpan'])){
        echo '<table>';
        echo '<tr><td>'.'Nama User: '.'</td><td>'.$_POST['user'].'</td></tr>';
        echo '<tr><td>'.'Email: '.'</td><td>'.$_POST['email'].'</td></tr>';
        echo '<tr><td>'.'Password: '.'</td><td>'.$_POST['password'].'</td></tr>';
        echo '<tr><td>'.'Jenis Kelamin: '.'</td><td>'.$_POST['gender'].'</td></tr>';
        echo '<tr><td>'.'Tanggal Lahir: '.'</td><td>'.$_POST['tgl_lahir'].'</td></tr>';
        echo '</table>';
        }
        ?>
        <form action="index.php">
        <input type="submit" value="Kembali">
        </form>
    
    </div>
</body>
</html>