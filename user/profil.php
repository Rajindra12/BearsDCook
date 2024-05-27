<?php
session_start();
include_once '../koneksi.php';

$query = "SELECT * FROM user WHERE id_user = '".$_SESSION['iduser']."'";
$result = mysqli_query($mysqli, $query);

if($result) {
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BearsDCook</title>
    <style>
        :root {
            --primary-color: #61a3ba;
            --secondary-color: #ffffdd;
            --yellowish: #d2de32;
            --greenish: #a2c579;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            background-color: var(--secondary-color);
        }

        header {
            background-color: var(--greenish);
            padding: 20px 120px 20px 104px;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .header__logo {
            display: flex;
            align-items: center;
        }

        .header__logo img {
            width: 35px;
            height: 45px;
            margin-right: 20px;
        }

        .header__nav {
            display: flex;
            gap: 20px;
            padding-top: 10px;
        }

        .header__navItems {
            list-style: none;
        }

        .header__navItems a {
            text-decoration: none;
            color: #000;
        }

        .btn button {
            padding: 15px 25px;
            border: none;
            border-radius: 6px;
        }

        .header__loginbtn {
            color: var(--primary-color);
        }

        .header__signupbtn {
            background-color: var(--primary-color);
            color: #fff;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        body, html {
            height: 100%;
        }

        .gambar_profil {
            width: 300px;
            height: 300px;
            border: 1px solid #000;
            border-radius: 50%;
        }

        .nama_profil {
            font-family: "Monaco", monospace;
        }

        .profil {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container_profil {
            display: flex;
            width: 80%;
            border: solid 2px var(--primary-color);
            border-radius: 10px;
            margin: 100px 0px 100px 0px;
            padding: 10px 10px 10px 10px;
        }
        
        .judul_resep {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start; 
            width: 80%;
            margin: 0 auto;
            gap: 10px;
        }

        .tombol {
            margin: 2px 0 0 0;
            padding: 3px;
            color: ;
        }
        
        .resep {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container_resep {
            border: var(--primary-color) solid 2px;
            background-color: var(--secondary-color);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            flex-direction: row;
            width: 80%;
            height: auto;
            margin: 10px auto 100px auto;
            flex-wrap: wrap;
        }

        .gambar_profil {
          width: 250px;
          height: 250px;
        }

        .kotak {
            background-color: #fff;
            width: 250px;
            height: 200px;
            padding: 20px;
            border: var(--primary-color) solid 1px;
            border-radius: 20px;
            margin: 30px; /* Sesuaikan margin */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .kotak img {
            align-self: center;
            width: 200px;
            height: 100px;
        }

        .tombol {
            padding: 5px 10px;
            background-color: var(--primary-color);
            border: none;
            border-radius: 5px;
            color: #FFF;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="header__logo">
            <img src="../bahan/goofyahh.png" alt="logo" />
            <h1 class="header__logotext">BearDCook</h1>
        </div>

        <nav>
            <ul class="header__nav">
                <li class="header__navItems"><a href="index.php">Home</a></li>
                <li class="header__navItems"><a href="courses.php">Courses</a></li>
                <li class="header__navItems"><a href="profil.php">Profil</a></li>
                <li class="header__navItems"><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="profil">
        <div class="container_profil">
            <div>
                <?php
                if($row["foto"] > 0) {
                    echo "<img src='../upload_foto/" . $row['foto'] . "' alt='' class='gambar_profil'>";
                } else {
                    echo "<img src='../upload_foto/profiledefault.jpg' alt='' class='gambar_profil'>";
                }
                ?>
            </div>
            <div class="nama_profil">
                <h1><?php echo $row["nama"]?></h1>
                <h3><?php echo $row["email"]?></h3>
                <a href="upload.php"><button class="tombol">Upload Foto</button></a>
            </div>
        </div>
    </div>
    
    <div class="container_judul">
        <div class="judul_resep">
            <h1 class="judul">Your Recipes </h1>
            <a href="upload_resep.php"><button class="tombol">Upload Recipe</button></a>
        </div>
    </div>

    <div class="resep">
        <div class="container_resep">
        <?php
        include '../koneksi.php';

        $sql = "SELECT id_resep, judul, cover, id_user FROM resep";
        $result = mysqli_query($mysqli, $sql);

        $resep_kotak = array(); // Array untuk menyimpan resep yang sesuai

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['id_user'] == $_SESSION['iduser']) {
                $resep_kotak[] = $row; // Tambahkan resep yang sesuai ke dalam array
            }
        }

        // Tampilkan resep yang sesuai
        if (!empty($resep_kotak)) {
            foreach ($resep_kotak as $row) {
                echo '<div class="kotak">';
                echo '<img src="' . $row['cover'] . '" alt="gambar"/>';
                echo '<p>' . $row['judul'] . '</p>';
                echo '<p><a href="resep.php?id=' . $row['id_resep'] . '">ayo lihat resepnya</a></p>';
                echo '</div>';
            }
        } else {
            echo "Anda harus upload sesuatu dulu";
        }
        ?>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
</body>
</html>