<?php
$server = "localhost";
$user = "root";
$pass = "";
$db   = "mahasiswa";

$koneksi = mysqli_connect($server, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil";
}

mysqli_close($koneksi);
?>