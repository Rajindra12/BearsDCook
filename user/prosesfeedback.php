<?php
include '../koneksi.php'; // Sambungkan ke database

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $komentar = mysqli_real_escape_string($mysqli, $_POST['komentar']);
    $bintang = mysqli_real_escape_string($mysqli, $_POST['bintang']);
    $id_user = $_SESSION['iduser']; // Pastikan user sudah login

    if($bintang > 0) {
        $sql = "INSERT INTO feedback (id_user, komentar, bintang) 
                VALUES ('$id_user', '$komentar', '$bintang')";
        
        if (mysqli_query($mysqli, $sql)) {
            header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
        // Simpan data ke database
    } else {
        echo "<script>
                alert('Harus ada rating!');
                window.location.href = 'index.php';
              </script>";
    }
}
?>