<!-- upload_resep.php -->
<?php
include '../koneksi.php'; // Sambungkan ke database

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = mysqli_real_escape_string($mysqli, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($mysqli, $_POST['deskripsi']);
    $langkah = mysqli_real_escape_string($mysqli, $_POST['langkah']);
    $vidio_url = mysqli_real_escape_string($mysqli, $_POST['vidio']);
    $level = mysqli_real_escape_string($mysqli, $_POST['level']);
    $id_user = $_SESSION['iduser']; // Pastikan user sudah login

    if (empty($judul) || empty($deskripsi) || empty($langkah)) {
        echo "Semua field harus diisi.";
        exit;
    }
    
    // Proses upload gambar cover
    $cover = $_FILES['cover'];
    $cover_path = '../uploads/' . basename($cover['name']);
    if (move_uploaded_file($cover['tmp_name'], $cover_path)) {
        // Simpan data ke database
        $sql = "INSERT INTO resep (judul, deskripsi, langkah, id_user, cover, vidio, level) 
                VALUES ('$judul', '$deskripsi', '$langkah', '$id_user', '$cover_path', '$vidio_url', '$level')";
        
        if (mysqli_query($mysqli, $sql)) {
            header('Location: index.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    } else {
        echo "Gagal mengunggah cover.";
    }
}
?>