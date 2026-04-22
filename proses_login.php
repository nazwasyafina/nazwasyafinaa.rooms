<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "") {
    echo "<script>alert('Input tidak lengkap'); window.location='login.php';</script>";
}

$correct_user = "admin";
$correct_pass = "12345";

if ($username == $correct_user && $password == $correct_pass) {
    echo "<script>alert('Login berhasil'); window.location='index.html';</script>";
} else {
    echo "<script>alert('Login gagal'); window.location='login.php';</script>";
}

?>
