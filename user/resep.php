<?php
session_start();
include_once '../koneksi.php';

// Ensure id_resep is set and is a number
$id_resep = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$query = "SELECT * FROM user WHERE id_user = '".$_SESSION['iduser']."'";
$result = mysqli_query($mysqli, $query);

if($result) {
    $row = mysqli_fetch_assoc($result);
}

// Query to count the number of feedbacks for each star rating
$sqlCount = "SELECT bintang, COUNT(*) as count FROM komentar WHERE id_resep = $id_resep GROUP BY bintang";
$resultCount = mysqli_query($mysqli, $sqlCount);

$starCounts = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0);

while ($rowCount = mysqli_fetch_assoc($resultCount)) {
    $starCounts[$rowCount['bintang']] = $rowCount['count'];
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
        margin: 75px 0 50px 0;
        border: 2px solid var(--primary-color);
        padding: 10px;
        border-radius: 10px;
      }
      
      
      .kotak_vidio {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: row;
        gap: 25px;
      }
      
      .vidio {
        width: 560px;
        height: 315px;
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
      }

      .balik a{
        text-decoration: none;
        color: var(--secondary-color);
      }

      .balik:hover {
        font-weight: bold;
      }
      
      .komentar {
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 0 auto 120px auto;
        width: 80%;
        gap: 10px;
      }

      .komentar_judul {
        font-size: 20px;
      }

      .komentar_form {
        border: 3px solid var(--primary-color);
        border-radius: 10px;
        padding: 10px;
        display: flex;
        width: 100%;
      }

      .komentar_tombol {
        padding: 10px 15px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
      }

      #komentar {
        width: 100%;
        height: auto;
        user-select: none;
      }

      #rating {
        border: none;
      }

      .komentar_total {
        border: 3px solid var(--primary-color);
        border-radius: 10px;
        padding: 25px;
        display: flex;
        flex-direction: column;
        width: 100%;
      }

      .komentar_orang {
        border: 3px solid var(--primary-color);
        border-radius: 10px;
        padding: 25px;
        display: flex;
        flex-direction: column;
        width: 100%;
      }

      .komentar_kotak {
        display: flex;
        flex-direction: column;
        gap: 5px;
        width: 100%;
      }

      .profil {
        display: flex;
        flex-direction: row; 
        font-weight: bold;
        gap: 5px;
      }

      .foto {
        width: 50px;
        height: 50px;
        border-radius: 50%;
      }

      .komen {
        font-size: 20px;
      }

      .rating {
        display: flex;
        flex-direction: row;
        gap: 5px;
      }

      .bintang {
        width: 25px;
        height: 25px;
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
    include '../koneksi.php'; // Connect to the database

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
              <div class="kumpulan_vidio">
              <?php
              if (!empty($row['vidio'])) {
                  echo "<iframe src=\"" . $row['vidio'] . "\" class=\"vidio\" allowfullscreen></iframe>";
              } else {
                  echo "<img src=\"../uploads/" . $row['cover'] . "\" class=\"vidio\">";
              }
              ?>
              </div>
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

    <section class="komentar">
      <div class="komentar_judul">
        <h1>Leave a comment</h1>
      </div>
      <div class="komentar_form">
        <form action="proseskomentar.php" method="post">
            <input type="hidden" name="id_resep" value="<?php echo $id_resep; ?>">
            <label for="komentar">Comment:</label>
            <br>
            <textarea type="text" id="komentar" name="komentar" autocomplete="off" required></textarea>
            <br>
            <label for="rating">Rating:</label>
            <fieldset id="rating" class="rating" required>
              <label for="star1">1</label>
              <input type="radio" id="star1" name="bintang" value="1">
              <label for="star2">2</label>
              <input type="radio" id="star2" name="bintang" value="2">
              <label for="star3">3</label>
              <input type="radio" id="star3" name="bintang" value="3">
              <label for="star4">4</label>
              <input type="radio" id="star4" name="bintang" value="4">
              <label for="star5">5</label>
              <input type="radio" id="star5" name="bintang" value="5">
            </fieldset>
            <br>
            <button class="komentar_tombol" type="submit" name="submit" id="submit">Submit</button>
        </form>
      </div>

      <div class="komentar_total">
        <p>Summary Comments:</p>
        <p><img src="../bahan/star.png" class="bintang"> = <?php echo $starCounts[1]; ?></p>
        <p><img src="../bahan/star.png" class="bintang"><img src="../bahan/star.png" class="bintang"> = <?php echo $starCounts[2]; ?></p>
        <p><img src="../bahan/star.png" class="bintang"><img src="../bahan/star.png" class="bintang"><img src="../bahan/star.png" class="bintang"> = <?php echo $starCounts[3]; ?></p>
        <p><img src="../bahan/star.png" class="bintang"><img src="../bahan/star.png" class="bintang"><img src="../bahan/star.png" class="bintang"><img src="../bahan/star.png" class="bintang"> = <?php echo $starCounts[4]; ?></p>
        <p><img src="../bahan/star.png" class="bintang"><img src="../bahan/star.png" class="bintang"><img src="../bahan/star.png" class="bintang"><img src="../bahan/star.png" class="bintang"><img src="../bahan/star.png" class="bintang"> = <?php echo $starCounts[5]; ?></p>
      </div>

      <?php
      include '../koneksi.php'; // Connect to the database

      $sql = "SELECT komentar.*, user.nama, user.foto 
              FROM komentar
              JOIN user ON komentar.id_user = user.id_user
              WHERE komentar.id_resep = $id_resep";
      $result = mysqli_query($mysqli, $sql);
      ?>
      <div class="komentar_orang">
        <?php
          while ($row = mysqli_fetch_assoc($result)) {
              echo '<div class="komentar_kotak">';
                echo '<div class="profil">';
                  echo "<img src=\"../upload_foto/" . $row["foto"] . "\" class=\"foto\">";
                  echo '<p>' . $row['nama'] . '</p>';
                echo '</div>';
                echo '<p class="komen">' . $row['komentar'] . '</p>';
                echo '<div class="rating">';
                  for ($i = 0; $i < $row['bintang']; $i++):
                      echo '<img src="../bahan/star.png" class="bintang">';
                  endfor;
                // if($row['bintang'] == 1) {
                //   echo '<div class="rating">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '</div>';
                // }elseif($row['bintang'] == 2) {
                //   echo '<div class="rating">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '</div>';
                // }elseif($row['bintang'] == 3) {
                //   echo '<div class="rating">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '</div>';
                // }elseif($row['bintang'] == 4){
                //   echo '<div class="rating">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '</div>';
                // }else{
                //   echo '<div class="rating">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '<img src="../bahan/star.png" class="bintang">';
                //   echo '</div>';
                // }
                echo '</div>';
                echo '<br>';
            echo '</div>';
          }
        ?>
      </div>
    </section>

    <footer>
      <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
  </body>
</html>
