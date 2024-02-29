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

.rawon {
  max-width: 70%;
  margin: 10px auto 50px auto;
  position: relative;
  padding: 20px;
  display: flex;
  border: var(--primary-color) solid 2px;
  border-radius: 10px;
  gap: 50px;
}

.tulisane {
  width: 850px;
  border: var(--primary-color) solid 1px;
  background-color: var(--secondary-color);
  padding: 40px;
  font-size: 18px;
}

.vidio_one {
  width: 600px;
  height: 350px;
}

.vidio_two {
  width: 50px;
  height: 50px;
}

.vidio_judul {
  font-size: 30px;
}

.vidio_des {
  font-size: 20px;
}

.profil {
  display: flex;
}

.profil p {
  font-size: 20px;
}

#all-courses {
  max-width: 70%;
  margin: auto;
  padding-bottom: 100px;
}

.judul-courses {
  padding: 50px 20px 5px 20px;
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
  width: 275px;
  height: 225px;
  padding: 20px;
  border: var(--primary-color) solid 1px;
  border-radius: 20px;
  margin: 30px auto;
}

.kotak img {
  width: 225px;
  height: 125px;
}

.balik {
  background-color: var(--primary-color);
  padding: 10px;
  border-radius: 10px;
  width: 200px;
  text-align: center;
  margin-top: 10px;
}

.balik a {
  text-decoration: none;
  color: var(--secondary-color);
}

.balik a:hover {
  text-decoration: underline;
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
  .rawon {
    display: block;
  }

  .tulisane {
    width: 100%;
    font-size: 18px;
  }

  .vidio_one {
    width: 100%;
    height: 300px;
    padding-top: 10px;
  }

  .vidio_two {
    width: 25px;
    height: 25px;
  }

  #all-courses {
    max-width: 70%;
    margin: auto;
    padding-bottom: 100px;
  }

  .judul-courses {
    padding: 50px 20px 5px 20px;
  }

  .judul-courses ul li {
    list-style: none;
  }

  .kelompok {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
  }

  .kotak {
    width: 200px;
    height: 250px;
  }

  .kotak img {
    width: 100%;
    height: 50%;
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
        <button class="header__signupbtn">Sign Up</button>
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

    <section class="rawon">
      <div class="tulisane">
        <h2>RESEP CARBONARA</h2>
        <br />
        <p>
          ### Bahan-bahan:
          <br />- 250 gram spaghetti <br />- 2 sendok makan minyak zaitun
          <br />- 3 siung bawang putih, cincang halus <br />- 1 buah bawang
          bombay, cincang halus <br />- 400 gram saus tomat (bisa yang siap
          pakai atau buatan sendiri) <br />- Garam secukupnya <br />- Merica
          secukupnya <br />- Sejumput gula <br />- Keju parmesan parut
          (opsional) <br />- Daun basil segar untuk hiasan (opsional)

          <br />
          <br />
          ### Langkah-langkah:

          <br />1. Rebus air dalam panci besar, tambahkan sedikit garam. Masak
          spaghetti sesuai petunjuk kemasan hingga al dente (sebagian masih
          sedikit kenyal). Tiriskan spaghetti dan sisihkan.

          <br />2. Panaskan minyak zaitun dalam wajan besar. Tumis bawang putih
          dan bawang bombay hingga harum dan berwarna keemasan.

          <br />3. Tambahkan saus tomat ke dalam tumisan bawang. Aduk rata dan
          biarkan mendidih. Bumbui dengan garam, merica, dan sejumput gula.
          Biarkan saus tomat mendidih sekitar 10-15 menit agar bumbu meresap.

          <br />4. Masukkan spaghetti ke dalam saus tomat yang sudah matang.
          Aduk rata hingga spaghetti terbalut dengan saus tomat.

          <br />5. Angkat spaghetti dan sajikan di piring saji. Taburi dengan
          keju parmesan parut dan hias dengan daun basil segar jika diinginkan.

          <br />6. Spaghetti siap disantap! Nikmati sebagai hidangan utama atau
          tambahkan daging cincang, sayuran, atau bahan lain sesuai selera untuk
          variasi rasa. Resep ini bisa menjadi dasar yang bagus untuk eksperimen
          dengan berbagai tambahan seperti daging cincang, jamur, atau olahan
          sayuran untuk membuat spaghetti yang lebih beragam dan sesuai dengan
          selera Anda. Selamat mencoba!
        </p>
      </div>
      <div class="vidio">
        <img
          src="https://img.freepik.com/free-photo/delicious-pasta-plate_23-2150690687.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
          alt="halo"
          class="vidio_one"
        />
        <h4 class="vidio_judul">Carbonara</h4>
        <p class="vidio_des">the best of the best</p>
        <br />
        <div class="profil">
          <img
            src="bahan\PhotoRoom-20231102_084531.png"
            alt="good"
            class="vidio_two"
          />
          <p>Rajindra</p>
        </div>
      </div>
    </section>

    <hr />

    <section id="all-courses">
      <div class="judul-courses">
        <h1>More Italian food</h1>
        <ul>
          <li><a href="">See more</a></li>
        </ul>
      </div>
      <div class="kelompok">
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/healthy-vegetarian-risotto-with-fresh-parsley-garnish-generated-by-ai_24640-80365.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Risotto</p>
          <p><a href="">ayo lihat resepnya</a></p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/delicious-pasta-plate_23-2150690553.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Lasagna</p>
          <p><a href="">ayo lihat resepnya</a></p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/top-view-delicious-pasta-plate_23-2150690621.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Spagetti</p>
          <p><a href="">ayo lihat resepnya</a></p>
        </div>
        <div class="kotak">
          <img
            src="bahan\_a8834d83-312d-46cd-a774-fd509e412895.jpeg"
            alt="gambar"
          />
          <p>Osso Buco</p>
          <p><a href="">ayo lihat resepnya</a></p>
        </div>
      </div>
      <div class="balik">
        <p><a href="courses.php">Back to Courses</a></p>
      </div>
    </section>

    <footer>
      <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
  </body>
</html>
