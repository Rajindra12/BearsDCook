<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="carbonara.css" />
    <title>BearsDCook</title>
  </head>
  <body>
    <header>
      <div class="header__logo">
        <img src="bahan\goofyahh.png" alt="logo" />
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
        <button class="header__signupbtn"><a href="register.php">Sign Up</a></button>
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
        <h2>RESEP RAWON</h2>
        <br />
        <p>
          ### Bahan-bahan:
          <br />- 500 gram daging sapi (potong dadu) <br />- 2 liter air <br />-
          3 lembar daun salam <br />- 2 batang serai (memarkan) <br />- 5 cm
          lengkuas (memarkan) <br />- 5 lembar daun jeruk <br />- Garam
          secukupnya <br />- Gula secukupnya <br />- Minyak untuk menumis
          <br />
          <br />
          ### Bumbu Halus:
          <br />- 8 butir bawang merah <br />- 5 siung bawang putih <br />- 4
          buah kemiri, sangrai <br />- 3 cm kunyit <br />- 4 cm jahe <br />- 1
          sdm ketumbar <br />- ½ sdt lada hitam
          <br />
          <br />
          ### Bahan Pelengkap:
          <br />- 100 gram kacang tolo (rendam semalam, rebus hingga lunak)
          <br />- 2 batang daun bawang (iris tipis) <br />- 2 sdm tauge (rendam
          air panas) <br />- 4 butir telur rebus <br />- Sambal, jeruk limo, dan
          bawang goreng sebagai pelengkap
          <br />
          <br />
          ### Langkah-langkah:
          <br />1. Tumis bumbu halus dengan minyak hingga harum dan matang.
          <br />2. Masukkan daging sapi, aduk hingga berubah warna. <br />3.
          Tuangkan air, masukkan daun salam, serai, lengkuas, daun jeruk, garam,
          dan gula. Aduk rata. <br />4. Biarkan mendidih dan kecilkan api. Masak
          hingga daging empuk dan kuah mengental, sekitar 1,5-2 jam (atau
          gunakan panci presto untuk mempercepat proses memasak). <br />5.
          Setelah daging empuk dan kuah mengental, cicipi dan sesuaikan rasa
          jika diperlukan. <br />6. Sajikan rawon dengan kacang tolo, daun
          bawang, tauge, telur rebus, sambal, jeruk limo, dan bawang goreng
          sebagai pelengkap. Selamat mencoba! Rasanya semakin lezat jika
          disajikan dengan nasi hangat.
        </p>
      </div>
      <div class="vidio">
        <img
          src="https://img.freepik.com/free-photo/delicious-goulash-ready-dinner_23-2149370849.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
          alt="halo"
          class="vidio_one"
        />
        <h4 class="vidio_judul">Rawon</h4>
        <p class="vidio_des">the best rawon in the world</p>
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
        <h1>More Indonesian food</h1>
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
          <p><a href="">ayo lihat resepnya</a></p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/close-up-high-protein-soup-meal_23-2149098847.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Sotos</p>
          <p><a href="">ayo lihat resepnya</a></p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/person-getting-street-food_23-2149004349.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Nasi Pecel</p>
          <p><a href="">ayo lihat resepnya</a></p>
        </div>
        <div class="kotak">
          <img
            src="https://img.freepik.com/free-photo/delicious-goulash-ready-dinner_23-2149370900.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Rendang</p>
          <p><a href="rendang.php">ayo lihat resepnya</a></p>
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
