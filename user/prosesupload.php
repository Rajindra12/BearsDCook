<?php
session_start();
  include "../koneksi.php";

  if(isset($_POST['submit'])) {
    $file = $_FILES['foto'];
    $fileName = $_FILES['foto']['name'];
    $fileExtention = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
    $extentionAllowed = array ('png','jpg','jpeg');
    $fileSize = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if (!in_array($fileExtention, $extentionAllowed)) {
        echo "tipe file tidak sesuai (png, jpg, jpeg)";
        exit();
    }

    if ($fileSize < 10000000) {
        move_uploaded_file($file_tmp, '../upload_foto/' . $fileName);
    }else{
        echo "File foto terlalu besar!";
    }

    $iduser = $_SESSION['iduser'];
    $file_path = "../upload_foto/";
    $sql = "UPDATE user SET foto='$fileName' WHERE id_user='$iduser'";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        echo "<script> alert('Foto profil berhasil di upload!') document.location.href='profil.php' </script>";
        header('location:profil.php');
    }else{
        echo "Tidak berhasil upload foto!";
    }
    // move_uploaded_file($file_tmp, '../upload_images/'.$foto);
    // $query = "INSERT INTO user SET foto = '$foto'";
    // mysqli_query($mysqli, $query)
    // or die("SQL Error " .mysqli_error());
    // header("location:profil.php");
  }else{
    mysqli_error($mysqli);
  }
?>