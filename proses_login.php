<?php
session_start();
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $query  = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
    $hasil  = mysqli_query($koneksi, $query);

    if ($hasil && mysqli_num_rows($hasil) > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status']   = 'login';
        header("Location: ../index.php");
        exit;
    } else {
        echo "<script>alert('login gagal'); window.location='../login.php';</script>";
        exit;
    }
}