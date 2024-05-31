<?php
include '../koneksi.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `resep` where id_resep=$id";
    $result=mysqli_query($mysqli,$sql);
    if($result){
        // echo "Deleted successfull";
        header('location:index.php');
    }else{
        die(mysqli_error($mysqli));
    }

}
?>