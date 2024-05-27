<!-- upload_resep.php -->
<?php
include '../koneksi.php'; // Sambungkan ke database

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $langkah = $_POST['langkah'];
    $id_user = $_SESSION['iduser']; // Pastikan user sudah login

    // Proses upload gambar cover
    $cover = $_FILES['cover'];
    $cover_path = '../uploads/' . basename($cover['name']);
    move_uploaded_file($cover['tmp_name'], $cover_path);

    // Proses upload video
    if ($_FILES['vidio']['error'] == UPLOAD_ERR_NO_FILE) {
        // Jika tidak ada video diunggah, gunakan gambar cover sebagai gantinya
        $vidio_path = $cover_path;
    } else {
        if ($vidio < 600000000) { 
        $vidio = $_FILES['vidio'];
        $vidio_path = '../uploads/' . basename($vidio['name']);
        move_uploaded_file($vidio['tmp_name'], $vidio_path);
        }else{
            echo "File vidio anda terlalu besar!";
        }
    }

    // Simpan data ke database
    $sql = "INSERT INTO resep (judul, deskripsi, langkah, id_user, cover, vidio) 
            VALUES ('$judul', '$deskripsi', '$langkah', '$id_user', '$cover_path', '$vidio_path')";
    
    if (mysqli_query($mysqli, $sql)) {
        header('Location: courses.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}
?>