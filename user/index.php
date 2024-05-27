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

.hero {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 70%;
  margin: 0 auto;
  gap: 10px;
  padding: 100px 0;
  /* padding: 130px 144px; */
  background-color: var(--secondary-color);
  position: relative;
}

.hero__text {
  width: 60%;
  display: flex;
  flex-direction: column;
  gap: 20px;
  align-items: start;
}

.hero__text-title {
  font-size: 64px;
  font-weight: 600;
  line-height: 76px; /* 118.75% */
}

.hero__text-subtitle {
  color: #4caf4f;
  font-size: 64px;
  font-weight: 600;
  line-height: 76px;
  word-wrap: break-word;
}

.hero__text-disc {
  color: #717171;
  font-size: 16px;
  font-weight: 400;
  line-height: 24px; /* 150% */
  word-wrap: break-word;
}

.hero__text-desc {
  color: #717171;
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  line-height: 24px; /* 150% */
}

.hero_image {
  width: 40%;
}

.tentang {
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: 100px auto;
  width: 70%;
  gap: 10px;
}

.tentang_judul {
  font-size: 20px;
}

.end {
  display: flex;
  align-items: center;
  padding: 130px 144px;
  background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url("../bahan/_b77a65fe-023b-4ddb-abd3-4ab52d2a8478.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  height: 650px;
  margin-bottom: 10px;
}

.end__text {
  width: 60%;
  display: flex;
  flex-direction: column;
  gap: 20px;
  align-items: start;
  position: relative;
  left: 100px;
}

.end__text-title {
  font-size: 40px;
  font-weight: 600;
  line-height: 76px; /* 118.75% */
  color: var(--secondary-color);
}

.end__text-desc {
  font-size: 18px;
  font-style: normal;
  font-weight: 400;
  line-height: 24px; /* 150% */
  color: var(--greenish);
}

.feedback {
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: 100px auto 120px auto;
  width: 70%;
  gap: 10px;
}

.feedback_judul {
  font-size: 20px;
}

.feedback_form {
  border: 3px solid var(--primary-color);
  border-radius: 10px;
  padding: 10px;
  display: flex;
  width: 100%;
}

.feedback_tombol {
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
          <li class="header__navItems"><a href="logout.php">logout</a></li>
        </ul>
      </nav>
    </header>

    <hr />

    <section class="hero">
      <div class="hero__text">
        <h1 class="hero__text-title">Welcome Chefss</h1>
        <p class="hero__text-desc">
          Explore a wide range of courses to enhance your skills and knowledge
          about cooking.
        </p>
      </div>

      <div class="hero__image">
        <img src="../bahan/goofyahh.png" alt="logo" />
      </div>
    </section>

    <hr />

    <div class="tentang">
      <div class="tentang_judul">
        <h2>About BearsDCook</h2>
      </div>
      <div class="tentang_tulisan">
        <!-- <p>This platform was created to ensure that anyone, regardless of their cooking skills, can learn to cook. By providing step-by-step instructions, video tutorials, and interactive classes, it aims to make the process enjoyable and accessible. Whether someone is a complete beginner or just looking to refine their techniques, this resource offers a wide range of recipes and cooking tips. The goal is to foster a community where everyone feels empowered to explore the culinary world, experiment with new dishes, and gain confidence in the kitchen.</p> -->
        <p>This website was created to ensure that anyone, regardless of their cooking skills, can learn to cook. By providing step-by-step instructions and aims to make the process enjoyable and accessible. Whether someone is a complete beginner or just looking to refine their techniques, this resource offers a wide range of recipes and cooking tips. The goal is to foster a community where everyone feels empowered to explore the culinary world, experiment with new dishes, and gain confidence in the kitchen.</p>
      </div>
    </div>
    
    <hr />

    <section class="end">
      <div class="end__text">
        <p class="end__text-desc">Yang buat namanya...</p>
        <h1 class="end__text-title">Rajindra Sangkabatara Aziz</h1>
        <p class="end__text-desc">
        He made this so that everyone who can't cook, can learn to cook here.<br> More of him is <a href="orangnya.php">here</a>
        </p>
      </div>
    </section>

    <section class="feedback">
      <div class="feedback_judul">
        <h1>Give Feedback</h1>
      </div>
      <div class="feedback_form">
        <form action="prosesfeedback.php" method="post">
            <label for="komentar">Comment:</label>
            <br>
            <textarea type="text" id="komentar" name="komentar" row="10" autocomplete="off"></textarea>
            <br>
            <label for="rating">Rating:</label>
            <fieldset id="rating" class="rating">
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
            <button class="feedback_tombol" type="submit" name="submit" id="submit">Submit</button>
        </form>
      </div>
    </section>

    <footer>
      <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
  </body>
</html>
