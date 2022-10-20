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
    <div class="center">
        <h1>Register</h1>
        <form id="register" method="post" action = "register.php">
            <div class="txt_field">
                <input type="text" name = "user" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="email" name = "email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name = "password" required>
                <span></span>
                <label>password</label>
            </div>
            <div>
                <label style = "color: #2596be">Jenis Kelamin</label><br><br>
                <input type="radio" name="gender" value="laki">
                <label style = "color: #2596be">Laki - laki</label><br>
                <input type="radio" name="gender" value="perempuan">
                <label style = "color: #2596be">Perempuan</label>
            </div>
            <div class="txt_field">
                <input type="date" name = "tgl_lahir" required>
                <span></span>
                <label>Tanggal Lahir</label>
            </div>
        <input type="submit" name = "simpan" value="Simpan">

        </form>
    </div>
</body>
</html>