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

.penikmat h3 {
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

#all-courses {
  width: 1200px;
  margin: auto;
  margin-bottom: 75px;
}

.judul-courses {
  padding: 30px 20px 5px 20px;
}

.judul-courses ul li {
  list-style: none;
}

.kelompok {
  border: var(--primary-color) solid 2px;
  background-color: var(--secondary-color);
  border-radius: 10px;
  display: flex;
}

.kotak {
  background-color: #fff;
  width: 300px;
  height: 250px;
  padding: 20px;
  border: var(--primary-color) solid 1px;
  border-radius: 20px;
  margin: 30px auto;
}

.kotak img {
  width: 250px;
  height: 150px;
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
  #all-courses {
    width: 90%;
    margin: auto;
  }

  .kelompok {
    border: var(--primary-color) solid 2px;
    background-color: var(--secondary-color);
    border-radius: 10px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
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
        <img src="bahan\goofyahh.png" alt="logo" />
        <h1 class="header__logotext">BearDCook</h1>
      </div>

      <nav>
        <ul class="header__nav">
          <li class="header__navItems"><a href="index.php
          ">Home</a></li>
          <li class="header__navItems"><a href="courses.php
          ">Courses</a></li>
          <li class="header__navItems"><a href="orangnya.php
          ">Orangnya</a></li>
        </ul>
      </nav>

      <div class="btn">
        <button class="header__loginbtn"><a href="login.php
        ">Login</a></button>
        <button class="header__signupbtn"><a href="register.php">Sign-Up</a></button>
      </div>
    </header>

    <hr />

    <div class="penikmat">
      <h3>Lets search for foods and drinks</h3>
      <div id="search-bar">
        <div class="search-container">
          <input type="text" id="search-input" placeholder="Search..." />
          <button id="search-btn">Search</button>
        </div>
      </div>
    </div>

    <hr />

    <section id="all-courses">
      <div class="judul-courses">
        <h1>Indonesian food</h1>
        <ul>
          <li><a href="">See more</a></li>
        </ul>
      </div>
      <div class="kelompok">
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/bbq-grill-cooked-with-hot-spicy-sichuan-pepper-sauce-is-chinese-herb_1150-13495.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Sate</p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/delicious-goulash-ready-dinner_23-2149370849.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Rawon</p>
          <p><a href="rawon.php
          ">ayo lihat resepnya</a></p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/delicious-goulash-ready-dinner_23-2149370900.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Rendang</p>
          <p><a href="rendang.php
          ">ayo lihat resepnya</a></p>
        </div>
      </div>
      <div class="judul-courses">
        <h1>American food</h1>
        <ul>
          <li><a href="">See more</a></li>
        </ul>
      </div>
      <div class="kelompok">
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/close-up-fried-chicken-drumsticks_23-2148682835.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=ais"
            alt="gambar"
          />
          <p>Fried Chicken</p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/grilled-cheeseburger-sesame-bun-with-fresh-toppings-generative-ai_188544-12325.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Grilled cheeseburger</p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/top-view-french-fries-bowl-with-ketchup-sauce_23-2148701517.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=ais"
            alt="gambar"
          />
          <p>French fries</p>
        </div>
      </div>
      <div class="judul-courses">
        <h1>Korean food</h1>
        <ul>
          <li><a href="">See more</a></li>
        </ul>
      </div>
      <div class="kelompok">
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/korean-instant-noodle-tteokbokki-korean-spicy-sauce-ancient-food_1150-42999.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=ais"
            alt="gambar"
          />
          <p>Tteokbokki</p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/cheesy-tokbokki-korean-traditional-food-black-board-background-lunch-dish_1150-42988.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=ais"
            alt="gambar"
          />
          <p>Cheesy tokbokki</p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/kimchi-ready-eat-black-plate_1150-35692.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Kimchi</p>
        </div>
      </div>
      <div class="judul-courses">
        <h1>Italian food</h1>
        <ul>
          <li><a href="">See more</a></li>
        </ul>
      </div>
      <div class="kelompok">
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/delicious-pasta-plate_23-2150690687.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Carbonara</p>
          <p><a href="carbonara.php">ayo lihat resepnya</a></p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/top-view-delicious-pasta-plate_23-2150690621.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Spagetti</p>
        </div>
        <div class="kotak">
          <img
            src="bahan\_a8834d83-312d-46cd-a774-fd509e412895.jpeg"
            alt="gambar"
          />
          <p>Osso Buco</p>
        </div>
      </div>
    </section>

    <footer>
      <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
  </body>
</html>
