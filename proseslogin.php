<?php 
// mengaktifkan session pada php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($mysqli,"select * from user where username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

//cek username
if($cek > 0){
    
    $data = mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if($data['role']=="admin"){

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = "admin";
        header("location:admins.php");
        
        // cek jika usser login sebagai user
    }elseif($data['role']=="user"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = "user";
        // alihkan ke halaman dashboard user
        header("location:user/index.php");

    }else{
        // alihkan ke halaman login kembali
        header("location:login.php");
    }
}else{
    header("location:login.php?pesan=gagal");
}
?>