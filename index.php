<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
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

    <section class="hero">
      <div class="hero__text">
        <h1 class="hero__text-title">Welcome Chefss</h1>
        <p class="hero__text-desc">
          Explore a wide range of courses to enhance your skills and knowledge
          about cooking.
        </p>
      </div>

      <div class="hero__image">
        <img src="bahan\goofyahh.png" alt="logo" />
      </div>
    </section>

    <hr />

    <div class="cari">
      <h3>Lets search for foods and drinks</h3>
      <div id="search-bar">
        <div class="search-container">
          <input type="text" id="search-input" placeholder="Search..." />
          <button id="search-btn">Search</button>
        </div>
      </div>
    </div>

    <hr />

    <section id="featured-courses">
      <div class="one">
        <img
          src="https://img.freepik.com/free-photo/side-view-club-sandwich-with-salted-cucumbers-lemon-olives-round-white-plate_176474-3049.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=ais"
          alt="gamabar"
          width="150"
          height="100"
        />
        <div class="kumpulan">
          <h3>Sandwich</h3>
          <p>The best of the best</p>
          <br />
          <p><a href="">ayo lihat resepnya</a></p>
        </div>
      </div>
      <div class="one">
        <img
          src="https://img.freepik.com/free-photo/bbq-grill-cooked-with-hot-spicy-sichuan-pepper-sauce-is-chinese-herb_1150-13495.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
          alt="gamabar"
          width="150"
          height="100"
        />
        <div class="kumpulan">
          <h3>Sate</h3>
          <p>Resep kelas kakap</p>
          <br />
          <p><a href="">ayo lihat resepnya</a></p>
        </div>
      </div>
      <div class="one">
        <img
          src="https://img.freepik.com/free-photo/delicious-pasta-plate_23-2150690687.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
          alt="gamabar"
          width="150"
          height="100"
        />
        <div class="kumpulan">
          <h3>Carbonara</h3>
          <p>Very good carbonara</p>
          <br />
          <p><a href="carbonara.php">ayo lihat resepnya</a></p>
        </div>
      </div>
      <div class="one">
        <img
          src="https://img.freepik.com/free-photo/delicious-goulash-ready-dinner_23-2149370849.jpg?size=626&ext=jpg&ga=GA1.1.1581541846.1693224330&semt=sph"
          alt="gamabar"
          width="150"
          height="100"
        />
        <div class="kumpulan">
          <h3>Rawon</h3>
          <p>kalau Mau boleh lihat</p>
          <br />
          <p><a href="rawon.php">ayo lihat resepnya</a></p>
        </div>
      </div>
    </section>
    <section id="featured-tulisan">
      <p>
        <a href="courses.php"
          >Want More, click here <br />
          trust me, it doesn't bite</a
        >
      </p>
    </section>

    <hr />

    <section class="end">
      <div class="end__text">
        <p class="end__text-desc">Yang buat namanya...</p>
        <h1 class="end__text-title">Rajindra Sangkabatara Aziz</h1>
        <p class="end__text-desc">
          Saya membuat ini agar semua orang belum bisa memasak bisa belaajr
          memasak disini
        </p>
      </div>
    </section>

    <footer>
      <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
  </body>
</html>
