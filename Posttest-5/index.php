<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KVC</title>
    <link rel="stylesheet" href="PostTest2.css">
    
</head>

<body style="background-color: var(--secondary-color);">

    <div class ="container"id="home">
        <div class="navbar" style="border-bottom: 3px solid var(--primary-color);">
            <h2 id = "judul" class = "logo"> KVC </h2>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="input_register.php">Register</a></li>
                        <li><a href="product.php">Produk</a></li>
                        <li><img src = "image/moon.png" id = "icon"></li>
                    </ul>
                </nav>
        </div>

        <div class="row-1"id="home">
            <div class = "col-1">
                <h2>AWESOME APPS</h2>
                <P>Aplikasi Baru Yang Dapat Mempermudah Anda Dalam Melakukan Suatu Hal</P>
                <button onclick="press()" type="button">Download Sekarang</button>
            </div>
            <div class="col-2">
                <img src="image\phone.png" class="image">
            </div>
        </div>

        
        <div class="row-2" id="about">
            <div class = "col-1">
                <h2>ABOUT US</h2>
                <button id = "btn">Press</button>
                <P id ="info" style="display: none">Aplikasi ini dibuat oleh seorang mahasiswa untuk mengerjakan PostTest 
                    Pemrograman Web yang bernama Kevin Yaneld Cendhana Dengan NIM 2109106031
                    dan sedang berkuliah di Universitas Mulawarman
                </P>
            </div>
            <div class="col-2">
                <img src="image\About-Us-PNG-Photos.png" class="image">
            </div>
        </div>        
    </div> 


</body>

<footer>
    <h4>Contact Us On :
    <img src="image/fb.png" class="medsos">
    <img src="image/ig.png" class="medsos">
    <img src="image/tw.png" class="medsos">
    </h4>
</footer>

<script src="script.js"></script>
</html>