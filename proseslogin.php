<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($mysqli,"SELECT * from user where username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

//cek username
if($cek > 0){
    
    $data = mysqli_fetch_assoc($login);
    $_SESSION['iduser'] = $data["id_user"];

    //cek jika user login sebagai admin
    if($data['role']=="admin"){

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = "admin";
        
        header("location:admin/index.php");
        
        // cek jika usser login sebagai user
    }elseif($data['role']=="user"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = "user";    
        // alihkan ke halaman dashboard user
        header("location:user/index.php");

    }else{
        // tampilkan alert dan alihkan kembali ke halaman login
        header("location:login.php?Username");   
    }
}else{
    // tampilkan alert dan alihkan kembali ke halaman login
    header("location:login.php");
}
?>