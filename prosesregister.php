<?php
            // Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $namas= $_POST['nama']; 
    $usernames = $_POST['username']; 
    $passwords = $_POST['password']; 
    //echo($judul);
    // include database connection file
    include_once("koneksi.php");
    
    // Insert user data into table
    $result = mysqli_query($mysqli,
    "INSERT INTO user(nama, username, password) VALUES ('$namas', '$usernames', '$passwords'");
    
    // Show message when user added
    // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
    header("location: index.php");
}
?>