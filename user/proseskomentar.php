<?php
include '../koneksi.php'; // Connect to the database

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $komentar = mysqli_real_escape_string($mysqli, $_POST['komentar']);
    $bintang = mysqli_real_escape_string($mysqli, $_POST['bintang']);
    $id_resep = $_POST['id_resep'];
    $id_user = $_SESSION['iduser']; // Ensure the user is logged in

    if($bintang > 0) {
        $sql = "INSERT INTO komentar (id_resep, id_user, komentar, bintang) 
                VALUES ('$id_resep', '$id_user', '$komentar', '$bintang')";
        
        if (mysqli_query($mysqli, $sql)) {
            header("Location: resep.php?id=$id_resep");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    } else {
        echo "<script>
                alert('Harus ada rating!');
                window.location.href = 'resep.php?id=$id_resep';
              </script>";
    }
}
?>
