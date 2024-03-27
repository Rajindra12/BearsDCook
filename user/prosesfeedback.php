<?php
if(isset($_POST['submit'])){
    $komentar= $_POST['komentar'];
    $username= $_POST['bintang'];

    include_once("../koneksi.php");

    $result = mysqli_query($mysqli,"INSERT INTO feedback(komentar, bintang) VALUES ('$komentar', '$bintang')");

    header("location: feedback.php");
}