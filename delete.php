<?php
include 'koneksi.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `user` where id=$id";
    $result=mysqli_query($mysqli,$sql);
    if($result){
        // echo "Deleted successfull";
        header('location:admins.php');
    }else{
        die(mysqli_error($mysqli));
    }

}
?>