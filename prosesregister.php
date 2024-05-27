<?php
            // Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $namas= $_POST['nama']; 
    $usernames = $_POST['username']; 
    $passwords = $_POST['password']; 
    $emails = $_POST['email']; 
    //echo($judul);
    // include database connection file
    include_once("koneksi.php");

    // Insert user data into table
    $sql = "INSERT INTO user(nama, username, password, email) VALUES ('$namas', '$usernames', '$passwords', '$emails')";
    $result = mysqli_query($mysqli, $sql);

    $sql = "SELECT * FROM user WHERE username='$usernames' AND nama='$namas'";
    $result = mysqli_query($mysqli, $sql);
    header('location:index.php?Your account has benn ');
}
?>