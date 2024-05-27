<?php
// isi nama host, username mysql, dan password mysql anda
$databaseHost = "localhost";
$databaseName = "bearsdcook";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// function cari($keyword) {
//     $query = "SELECT * FROM user WHERE nama='$keyword'";
//     return query($query);
// }
//$host = mysqli_connect("localhost,"root,"");

// if($mysqli){
//     echo "koneksi db berhasil.<br/>";
// }else{
//     echo "koneksi gagal.<br/>";
// }

?>