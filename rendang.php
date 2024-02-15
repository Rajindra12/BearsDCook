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
          <li class="header__navItems"><a href="orangnya.php">Orangnya</a></li>
        </ul>
      </nav>

      <div class="btn">
        <button class="header__loginbtn"><a href="login.php">Login</a></button>
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
        <h2>RESEP RENDANG</h2>
        <br />
        <p>
          ### Bahan-bahan:
          <br />- 1 kg daging sapi (potong dadu) <br />- 4 lembar daun jeruk
          <br />- 2 batang serai (memarkan bagian putih) <br />- 4 lembar daun
          salam <br />- 2 liter santan dari 2 butir kelapa <br />- Garam
          secukupnya <br />- Minyak untuk menumis ### Bumbu Halus: <br />- 10
          buah cabe merah keriting <br />- 8 buah cabe rawit (sesuai selera
          pedasnya) <br />- 10 siung bawang merah <br />- 8 siung bawang putih
          <br />- 2 ruas jahe <br />- 3 ruas lengkuas <br />- 4 cm kunyit b- 2
          sdm ketumbar <br />- 1 sdm merica butiran - 5 butir kemiri
          <br /><br />### Langkah-langkah: <br />1. Tumis bumbu halus dengan
          sedikit minyak hingga harum dan matang. <br />2. Masukkan daging sapi,
          aduk hingga berubah warna. <br />3. Tuangkan santan, masukkan daun
          jeruk, serai, daun salam, dan garam. Aduk rata. <br />4. Masak rendang
          dengan api kecil hingga santan menyusut dan bumbu meresap ke dalam
          daging. Proses memasak ini bisa memakan waktu sekitar 3-4 jam.
          <br />5. Aduk sesekali untuk menghindari agar tidak gosong. Pastikan
          api kecil agar santan tidak pecah. <br />6. Setelah santan menyusut
          dan bumbu meresap ke dalam daging, aduk perlahan hingga daging
          berwarna kecokelatan dan berminyak. <br />7. Koreksi rasa, tambahkan
          garam jika diperlukan. <br />8. Rendang siap disajikan! Sajikan dengan
          nasi hangat atau ketupat. Rendang biasanya menjadi semakin enak saat
          disajikan setelah dibiarkan semalam dan dipanaskan kembali sebelum
          disantap. Selamat mencoba!
        </p>
      </div>
      <div class="vidio">
        <img
          src="https://img.freepik.com/free-photo/delicious-goulash-ready-dinner_23-2149370900.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
          alt="halo"
          class="vidio_one"
        />
        <h4 class="vidio_judul">Rendang</h4>
        <p class="vidio_des">the best Rendang in the world</p>
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
            src="https://img.freepik.com/free-photo/delicious-goulash-ready-dinner_23-2149370849.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
            alt="gambar"
          />
          <p>Rawon</p>
          <p><a href="rawon.php">ayo lihat resepnya</a></p>
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
