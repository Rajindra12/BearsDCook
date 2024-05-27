<!-- upload_resep.php -->
<?php
include '../koneksi.php'; // Sambungkan ke database

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = mysqli_real_escape_string($mysqli, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($mysqli, $_POST['deskripsi']);
    $langkah = mysqli_real_escape_string($mysqli, $_POST['langkah']);
    $id_user = $_SESSION['iduser']; // Pastikan user sudah login

    if (empty($judul) || empty($deskripsi) || empty($langkah)) {
        echo "Semua field harus diisi.";
        exit;
    }
    
    // Proses upload gambar cover
    $cover = $_FILES['cover'];
    $cover_path = '../uploads/' . basename($cover['name']);
    if (move_uploaded_file($cover['tmp_name'], $cover_path)) {
        // Proses upload video
        if ($_FILES['vidio']['error'] == UPLOAD_ERR_NO_FILE) {
            // Jika tidak ada video diunggah, gunakan gambar cover sebagai gantinya
            $vidio_path = $cover_path;
        } else {
            $vidio = $_FILES['vidio'];
            if ($vidio['size'] < 51341724) { 
                $vidio_path = '../uploads_video/' . basename($vidio['name']);
                if (!move_uploaded_file($vidio['tmp_name'], $vidio_path)) {
                    echo "Gagal mengunggah video.";
                    exit;
                }
            } else {
                echo "File video Anda terlalu besar!";
                exit;
            }
        }

        // Simpan data ke database
        $sql = "INSERT INTO resep (judul, deskripsi, langkah, id_user, cover, vidio) 
                VALUES ('$judul', '$deskripsi', '$langkah', '$id_user', '$cover_path', '$vidio_path')";
        
        if (mysqli_query($mysqli, $sql)) {
            header('Location: courses.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    } else {
        echo "Gagal mengunggah cover.";
    }
}
?>
