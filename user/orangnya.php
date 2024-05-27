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
  background-color: #7e7e61;
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

.center {
  text-align: center;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url("../bahan/_b77a65fe-023b-4ddb-abd3-4ab52d2a8478.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  height: 650px;
}

.intro {
  font-size: 36px;
  font-weight: bold;
  position: relative;
  top: 300px;
  color: var(--secondary-color);
}

.intro-img {
  height: 250px;
  width: 250px;
  position: relative;
  top: 135px;
  left: 500px;
}

.kabeh {
  max-width: 1000px;
  margin: auto;
  text-align: center;
}

.tulisan h2 {
  font-size: 40px;
  padding-top: 10px;
  color: var(--secondary-color);
  padding-bottom: 1px;
}

.tulisan p {
  font-size: 20px;
  color: var(--secondary-color);
}

.need {
  align-items: center;
  display: flex;
  gap: 500px;
  margin-bottom: 25px;
}

.telepon {
  display: flex;
  gap: 20px;
  margin-top: 10px;
}

.telepon img {
  width: 75px;
  height: 75px;
}

.telepon p {
  font-size: 20px;
  align-self: center;
  color: var(--secondary-color);
}

.insta {
  display: flex;
  gap: 20px;
}

.insta img {
  width: 75px;
  height: 75px;
}

.insta p {
  font-size: 20px;
  align-self: center;
  color: var(--secondary-color);
}

.email {
  display: flex;
  gap: 20px;
}

.email img {
  width: 75px;
  height: 75px;
}

.email p {
  font-size: 20px;
  align-self: center;
  color: var(--secondary-color);
}

.google {
  border: #000 solid 2px;
  border-radius: 10px;
  padding: 20px;
}

.google a {
  text-decoration: none;
  color: var(--secondary-color);
}

.google a:hover {
  color: var(--secondary-color);
  text-decoration: underline;
}

.tabel {
  color: var(--secondary-color);
  margin: 0px auto 100px auto;
  text-align: center;
}

.tabel th,
td {
  padding: 10px;
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
  .center {
    height: 600px;
  }
  .intro {
    font-size: 30px;
    position: relative;
    top: 100px;
  }
  .intro-img {
    width: 250px;
    height: 250px;
    position: relative;
    top: 200px;
    left: 150px;
  }
  .need {
    align-items: center;
    display: flex;
    gap: 300px;
    margin-left: 25px;
  }
  .telepon {
    margin-top: 20px;
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

    <div class="center">
      <p class="intro">Hi, I'm Rajindra Sangkabatara Aziz,</p>
      <p class="intro">a Student from SMK Telkom Sidoarjo.</p>
      <img
        src="../bahan/PhotoRoom-20231102_084531.png"
        alt="Dia"
        class="intro-img"
      />
    </div>

    <section class="kabeh">
      <div class="tulisan">
        <h2>More about him</h2>
        <p>He's born in Sidoarjo, 2008</p>
        <p>Now he is a student in SMK Telkom Sidoarjo</p>
      </div>

      <div class="need">
        <div class="contact">
          <div class="telepon">
            <img src="../bahan/call.png" alt="Dia" />
            <p>+62-811-3433-006</p>
          </div>
          <div class="telepon">
            <img src="../bahan/whatsapp.png" alt="Dia" />
            <p>+62-811-3433-006</p>
          </div>
          <div class="insta">
            <img src="../bahan/instagram-logo.png" alt="Dia" />
            <p>rajindra_a</p>
          </div>
          <div class="email">
            <img src="../bahan/mail.png" alt="Dia" />
            <p>jindra.aziz@gmail.com</p>
          </div>
        </div>
        <div class="google">
          <p>
            <a href="https://sites.google.com/view/nduwerajindra/home"
              >Moreeee</a
            >
          </p>
        </div>
      </div>
    </section>

    <table class="tabel" border="1px" width="700px">
      <tr>
        <th>IDE</th>
        <td>
          Ide saya adalah membuat web yang memudahkan orang-orang untuk mencari
          resep makanan dan minuman. Nanti akan ada vidio masaknya di sebelah
          resepnya.
        </td>
      </tr>
      <tr>
        <th rowspan="2">WARNA</th>
        <td>
          #61a3ba (Seperti biru), #ffffdd (krem), #d2de32 (seperti kuning),
          #a2c579 (seperti hijau)
        </td>
      </tr>
      <tr>
        <td>
          <a href="https://colorhunt.co/palette/61a3baffffddd2de32a2c579"
            >saya dapat dari web Color Hunt</a
          >
        </td>
      </tr>
      <tr>
        <th rowspan="15">sources</th>
        <td>
          <a
            href="https://img.freepik.com/free-photo/delicious-pasta-plate_23-2150690687.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >Carbonara by Freepik (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/delicious-goulash-ready-dinner_23-2149370849.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >Rawon by Freepik (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/bbq-grill-cooked-with-hot-spicy-sichuan-pepper-sauce-is-chinese-herb_1150-13495.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >Sate by jcomp (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/side-view-club-sandwich-with-salted-cucumbers-lemon-olives-round-white-plate_176474-3049.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=ais"
            >Sandwich by 8photo (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/delicious-goulash-ready-dinner_23-2149370900.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >Rendang by Freepik (Freepik.com)</a
          >
        </td>
      </tr>

      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/close-up-fried-chicken-drumsticks_23-2148682835.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=ais"
            >Fried Chicken by Freepik (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/grilled-cheeseburger-sesame-bun-with-fresh-toppings-generative-ai_188544-12325.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >Grilled cheeseburger by vecstock (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/top-view-french-fries-bowl-with-ketchup-sauce_23-2148701517.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=ais"
            >French fries by Freepik (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/korean-instant-noodle-tteokbokki-korean-spicy-sauce-ancient-food_1150-42999.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=ais"
            >Tteokbokki by jcomp (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/cheesy-tokbokki-korean-traditional-food-black-board-background-lunch-dish_1150-42988.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=ais"
            >Cheesy tokbokki by jcomp (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/kimchi-ready-eat-black-plate_1150-35692.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >Kimchi by jcomp (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/top-view-delicious-pasta-plate_23-2150690621.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >Spagetti by Freepik (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/person-getting-street-food_23-2149004349.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >pecel by Freepik (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/person-getting-street-food_23-2149004349.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >Soto by Freepik (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/healthy-vegetarian-risotto-with-fresh-parsley-garnish-generated-by-ai_24640-80365.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >Risotto by stockgiu (Freepik.com)</a
          >
        </td>
      </tr>
      <tr></tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/delicious-pasta-plate_23-2150690553.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            >lasagna by Freepik (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>
          <a
            href="https://img.freepik.com/free-photo/scallions-peppers-garlic-shiitake-mushrooms-wooden-plate_1150-25629.jpg?w=1380&t=st=1701535156~exp=1701535756~hmac=57422adaa04fccd38a5c1b25924c038cfced9dd9adf0995a1ae0c62b97b20189"
            >login wallpaper by jcomp (Freepik.com)</a
          >
        </td>
      </tr>
      <tr>
        <td>Bear background and Osso Buco (Bing Ai image generator)</td>
      </tr>
      <tr>
        <td>my profile picture (photo room)</td>
      </tr>
    </table>

    <footer>
      <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
  </body>
</html>
