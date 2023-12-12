<?php
$servername= "localhost";
$username = "root";
$password = "";
$koneksi = mysqli_connect($servername,$username,$password);
if (!$koneksi)
die ("koneksi Gagal");
mysqli_close ($koneksi);
print("Sukses terhubung");
echo"<br>";
?>