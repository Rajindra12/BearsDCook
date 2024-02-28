<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <header>
            <div class="header__logo">
            <img src="bahan\goofyahh.png" alt="logo" />
            <h1 class="header__logotext">BearDCook</h1>
        </div>
        
        <div class="judul">
            <h1>View Tabel User</h1>
        </div>
        
        <div class="btn">
            <button class="header__loginbtn"><a href="login.php">Login</a></button>
            <button class="header__signupbtn"><a href="register.php">Sign-Up</a></button>
        </div>
    </header>
    
    <div class="utama">
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </table>
    </div>
</body>
</html>
<?php
    //Select Tabel User dari database
    $nomor = 1; // Initialize row number counter
    echo $nomor;
    include 'koneksi.php'; // Include the connection file
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM user") or die(mysqli_error());


    while($data = mysqli_fetch_array($query_mysql)) { 
        ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td>

        </td>
        <?php } ?>
    </tr>