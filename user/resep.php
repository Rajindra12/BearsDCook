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

      #search-btn:hover {
        background-color: var(--greenish);
      }

      .resep {
        display: flex;
        justify-content: center;
      }

      .kotak {
        display: flex;
        flex-direction: column;
        width: 80%;
        margin: 75px 0 75px 0;
        border: 2px solid var(--primary-color);
        padding: 10px;
        border-radius: 10px;
      }
      

      .kotak_vidio {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: row;
        /* border: 1px solid #000;
        border-radius: 5px; */
        gap: 25px;
      }

      .vidio {
        width: 25%;
        height: 100%;
      }

      .vidio_judul {
        font-size: 50px;
      }

      .profil {
        display: flex;
        flex-direction: row; 
        margin: 20px 0 0 0;
        font-weight: bold;
        gap: 5px;
      }

      .foto {
        width: 50px;
        height: 50px;
        border-radius: 50%;
      }

      .waktu_upload p {
        font-weight: bold;
      }

      .kotak_balik {
        width: 80%;
        margin: 0 auto 100px auto;
      }

      .balik {
        background-color: var(--primary-color);
        border: -1px solid #000;
        padding: 10px;
        border-radius: 10px;
        width: 200px;
        text-align: center;
        margin-top: 10px;
      }

      .balik a{
        text-decoration: none;
        color: var(--secondary-color);
      }

      .balik:hover {
        font-weight: bold;
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

    <hr />

    <?php
    include '../koneksi.php'; // Sambungkan ke database

    $id_resep = $_GET['id'];
    $sql = "SELECT resep.*, user.nama, user.foto 
            FROM resep 
            JOIN user ON resep.id_user = user.id_user 
            WHERE resep.id_resep = $id_resep";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <section class="resep">
      <div class="kotak">
            <div class="kotak_vidio">
              <?php if ($row['vidio'] != $row['cover']): ?>
                <video width="560" height="315" controls>
                  <source src="<?php echo $row['vidio']; ?>" type="video/mp4" class="vidio">
                  Your browser does not support the video tag.
                </video>
                <?php else: ?>
                  <img src="<?php echo $row['cover']; ?>" alt="Cover" class="vidio"/>
                  <?php endif; ?>
                  <div class="tulisan_vidio">
                    <h1 class="vidio_judul"><?php echo $row['judul']; ?></h1>
                    <p class="vidio_des"><?php echo strtolower($row['deskripsi']); ?></p>
                  </div>
            </div>
            <div class="tulisane">
                <br />
                <p><?php echo ($row['langkah']); ?></p>
            </div>
            <div class="profil">
                <img src="../upload_foto/<?php echo $row["foto"]?>" alt="Foto user" class="foto"/>
                <p><?php echo $row['nama']; ?></p>
            </div>
            <div class="waktu_upload">
              <br>
              <p><?php echo $row['waktu']; ?></p>
            </div>
      </div>
    </section>
    
    <div class="kotak_balik">
      <div class="back">
        <button class="balik"><a href="courses.php">Back to Courses</a></button>
      </div>
    </div>

    <footer>
      <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
  </body>
</html>
