<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Courses</title>
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

.cari h3 {
  text-align: center;
  padding: 20px 20px 0px 20px;
  color: var(--primary-color);
}

.search-container {
  background-color: var(--secondary-color);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px 20px 20px 20px;
}

#search-input {
  padding: 20px;
  width: 500px;
  border: 1px solid var(--primary-color);
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

.judul_halaman {
    text-align: center;
    color: var(--primary-color);
    margin: 30px 0 30px 0;
    font-weight: bold;
    font-size: 30px;
}

.all_courses {
    border: var(--primary-color) solid 2px;
    background-color: var(--secondary-color);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    flex-direction: row;
    width: 90%;
    height: auto;
    margin: 10px auto 100px auto;
    flex-wrap: wrap;
    padding: 30px 0;
    gap: 60px;
}

.kotak {
    background-color: #fff;
    width: 275px;
    height: 225px;
    padding: 20px;
    border: var(--primary-color) solid 1px;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.kotak img {
    align-self: center;
    width: 225px;
    height: 125px;
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

@media screen and (max-width: 914px) {
  .all-courses {
    width: 90%;
    margin: auto;
  }

  .kotak {
    width: 200px;
    height: 200px;
  }

  .kotak img {
    width: 100%;
    height: 60%;
  }
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
          <li class="header__navItems"><a href="logout.php">logout</a></li>
        </ul>
      </nav>
    </header>


    <hr />

    <div class="cari">
        <h3>Let's search for foods and drinks</h3>
        <div id="search-bar">
            <div class="search-container">
                <form action="search.php" method="GET">
                    <input type="text" id="search-input" name="q" placeholder="Search..." />
                    <button type="submit" id="search-btn">Search</button>
                </form>
            </div>
        </div>
    </div>

    <hr />
    
    <p class="judul_halaman">All Courses</p>

    <div class="all_courses">
        <?php
        include '../koneksi.php';

        $sql = "SELECT id_resep, judul, cover FROM resep";
        $result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="kotak">';
            echo '<img src="' . $row['cover'] . '" alt="gambar"/>';
            echo '<p>' . $row['judul'] . '</p>';
            echo '<p><a href="resep.php?id=' . $row['id_resep'] . '">ayo lihat resepnya</a></p>';
            echo '</div>';
        }
        ?>
    </div>
    

    <footer>
      <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
  </body>
</html>