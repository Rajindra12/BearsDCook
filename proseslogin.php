<?php
// mengaktifkan session pada php
session_start();
include 'koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];

$login = mysqli_query($mysqli,"select * from user where usename='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    
    $data = mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if($data['level']=="admin"){

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
    
    // cek jika usser login sebagai user
    }elseif($data['level']=="user"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        // alihkan ke halaman dashboard user
        header("location:user/index.php");

    }else{

        // alihkan ke halaman login kembali
        header("location:index.php");
    }
}else{
    header("location:index.php?pesan=gagal");
}
?>