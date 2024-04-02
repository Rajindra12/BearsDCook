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
  padding: 130px 144px;
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

#featured-courses {
  background-color: var(--secondary-color);
  text-align: left;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
}

.one {
  display: flex;
  gap: 25px;
  background-color: #fff;
  margin: 35px 20px 0px 20px;
  padding: 50px;
  border-radius: 5px;
  border: var(--primary-color) solid 2px;
  width: 700px;
}

.one img {
  border: #000 solid 1px;
}

#featured-tulisan {
  background-color: var(--secondary-color);
  text-align: right;
  padding: 25px 220px 25px 0px;
  color: var(--primary-color);
  text-decoration: none;
}

.end {
  display: flex;
  align-items: center;
  padding: 130px 144px;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
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
        </ul>
      </nav>

      <div class="btn">
        <button class="header__loginbtn"><a href="login.php">Login</a></button>
        <button class="header__signupbtn"><a href="register.php">Sign-Up</a></button>
      </div>
    </header>
    <footer>
      <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
  </body>
</html>