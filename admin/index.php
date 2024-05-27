<?php

require '../koneksi.php';

// Lakukan query
$query = "SELECT * FROM resep";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Tabel</title>
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
        padding: 15px 70px;
        border: none;
        border-radius: 6px;
        }

        .header__loginbtn {
        color: var(--primary-color);
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

        .title {
            text-align: center;
            margin: 20px 20px 10px 20px;
        }

        .kumpulan {
            width: 80%;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            border-color: var(--greenish);
        }

        .update {
            background-color: #1E90FF;
            padding: 5px;
            border-radius: 5px;
        }
        
        .delete {
            background-color: #D30000;
            padding: 5px;
            border-radius: 5px;
        }

        .link {
            text-decoration: none;
            color: #FFFFFF;
        }

        .link:hover {
            text-decoration: underline;
        }

        .id {
            font-weight: bold;
        }

        .keluar {
            margin: 0 auto; 
            background-color: var(--yellowish);
            padding: 5px;
            border-radius: 5px;
        }

        .keluars {
            text-align: center;
            text-decoration: none;
            color: #000;
        }

        .keluars:hover {
            color: #FFF;
            text-decoration: underline;
        }

        .plus {
            margin: 0 auto; 
            background-color: var(--yellowish);
            padding: 5px;
            border-radius: 5px;
        }
        
        .pluss {
            text-align: center;
            text-decoration: none;
            color: #000;
        }

        .pluss:hover {
            color: #FFF;
            text-decoration: underline;
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
            <li class="header__navItems"><a href="feedback.php">Feedback</a></li>
            <li class="header__navItems"><a href="admins.php">CRUD</a></li>
            <li class="header__navItems"><a href="logout.php">logout</a></li>
          </ul>
        </nav>
      </header>
      
      <hr class=pemabatas>
      
      <h2 class="title">Data Tabel</h2>
      
      <div class="kumpulan">
          <div class="logout">
              <button class="plus"><a href="upload_resep.php" class="pluss">Add recipe</a></button>
          </div>
  
          <br>
  
          <table>
              <tr>
                  <th>ID_resep</th>
                  <th>ID_user</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Langkah</th>
                  <th>Waktu</th>
                  <th>Operation</th>
                  <!-- Tambahkan kolom lain sesuai kebutuhan -->
              </tr>
              <?php
              // Tampilkan data dari hasil query
              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td class=id>" . $row["id_resep"] . "</td>";
                      echo "<td>" . $row["id_user"] . "</td>";
                      echo "<td>" . $row["judul"] . "</td>";
                      echo "<td>" . $row["deskripsi"] . "</td>";
                      echo "<td>" . $row["langkah"] . "</td>";
                      echo "<td>" . $row["waktu"] . "</td>";
                      echo "<td>" . "<button class=update><a href=update.php?updateid=$row[id_resep] class=link>Update</a></button>" . " " . "<button class=delete><a href=delete.php?deleteid=$row[id_resep] class=link>Delete</a></button>" . "</td>";
                      // Tambahkan kolom lain sesuai kebutuhan
                      echo "</tr>";
                  }
              } else {
                  echo "<tr><td colspan='3'>Tidak ada data yang ditemukan</td></tr>";
              }
  
          
              ?>
          </table>
      </div>
    </body>
</html>

    <?php
    // Tutup koneksi database
    mysqli_close($mysqli);
    ?>