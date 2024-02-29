<?php
// include database connection file
include_once("koneksi.php");
$id=$_GET['updateid'];
// Check If form submitted, insert form data into users table.
if(isset($_POST['update'])) {
    $namas= $_POST['nama']; 
    $usernames = $_POST['username']; 
    $passwords = $_POST['password']; 
    $emails = $_POST['email']; 
    //echo($judul);
    
    // Insert user data into table
    $sql="update `user` set id=$id,nama='$namas',username='$usernames',password='$passwords',email='$emails' where id=$id";
    $result = mysqli_query($mysqli,$sql);
    if($result){
        echo "updated successfully";
        // header("location:admins.php");
    }else{
        die(mysqli_error($mysqli))
    }
}
?>