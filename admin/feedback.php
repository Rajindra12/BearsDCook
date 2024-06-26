<?php

require '../koneksi.php';

// Lakukan query
$query = "SELECT * FROM feedback";
$result = mysqli_query($mysqli, $query);
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

.cari h3 {
  text-align: center;
  padding: 20px 20px 0px 20px;
  color: var(--primary-color);
  background-color: var(--secondary-color);
}

.search-container {
  background-color: var(--secondary-color);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2px 20px 25px 20px;
}

#search-input {
  padding: 20px;
  width: 500px;
  border: 1px solid #ccc;
  border-radius: 10px;
  outline: none;
}

#search-btn {
  padding: 10px 20px;
  margin-left: 10px;
  background-color: var(--primary-color);
  color: white;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

#search-btn:hover {
  background-color: var(--greenish);
}

.semua {
  width: 80%;
  display: flex;
  flex-direction: column;
  margin: 7px auto 100px auto;
  gap: 10px;
}

.title {
  text-align: center;
  margin: 20px;
}

table {
  border-collapse: collapse;
  width: 100%;
  margin: 0 auto;
}

th, td {
  border: 1px solid black;
  padding: 8px;
  text-align: left;
  border-color: var(--greenish);

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
            <li class="header__navItems"><a href="index.php">Recipes</a></li>
            <li class="header__navItems"><a href="feedback.php">Feedbacks</a></li>
            <li class="header__navItems"><a href="admins.php">Users</a></li>
            <li class="header__navItems"><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
    </header>

      <hr>

      <div class="semua">
        <h2 class="title">Feedback</h2>
  
        <table>
            <tr>
                <th>ID_user</th>
                <th>Nama</th>
                <th>Komentar</th>
                <th>Bintang</th>
            </tr>
            <?php
              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td class=id>" . $row["id_ulasan"] . "</td>";
                      echo "<td>" . $row["id_ulasan"] . "</td>";
                      echo "<td>" . $row["komentar"] . "</td>";
                      echo "<td>" . $row["bintang"] . "</td>";
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