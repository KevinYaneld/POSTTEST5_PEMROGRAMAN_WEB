<?php
$koneksi = mysqli_connect("localhost","root","","web_app");

if(mysqli_connect_errno()){
    echo "Koneksi Gagal : ".mysqli_error();
}
?>