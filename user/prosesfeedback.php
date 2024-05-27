<?php
include '../koneksi.php'; // Sambungkan ke database

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $komentar = $_POST['komentar'];
    $bintang = $_POST['bintang'];
    $id_user = $_SESSION['iduser']; // Pastikan user sudah login

    // Simpan data ke database
    $sql = "INSERT INTO feedback (id_user, komentar, bintang) 
            VALUES ('$id_user', '$komentar', '$bintang')";
    
    if (mysqli_query($mysqli, $sql)) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>