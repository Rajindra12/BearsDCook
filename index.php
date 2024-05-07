<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
      :root {
        --primary-color: #61a3ba;
        --secondary-color: #ffffdd;
        --yellowish: #d2de32;
        --greenish: #a2c579;
      }
      * {
        margin: none;
        padding: none;
      }
      body {
        background-image: linear-gradient(to top right, var(--greenish), var(--yellowish));
        background-repeat: no-repeat;
        background-size: cover;
      }
      main {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: inline;
        align-content: space-between;
        gap: 25px;
      }
      .kotak {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 98vh;
        flex-direction: column;
        text-align: center;
      }
      .kotak-dalam{
        border: 2px solid black;
        padding: 25px 20px 25px 20px;
        border-radius: 10px;
      }
      h3 {
        margin-top: -10px;
      }
      .tulisan {
        font-s
      }
      .tombol {
        display: flex;
        align-content: space-between;
        flex-direction: row;
        gap: 25px;
        justify-content: center;
      }
      .btnlogin {
        padding: 10px 20px 10px 20px;
        background-color: var(--secondary-color);
        border-radius: 5px;
      }
      .btnsignup {
        padding: 10px 20px 10px 20px;
        background-color: var(--secondary-color);
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <main>
      <div class="logo">
        <img src="bahan\goofyahh.png" alt="logo">
      </div>
      <div class="kotak">
        <div class="kotak-dalam">
          <div class="tulisan">
            <h1>Selamat datang di BearsDcook</h1>
            <h3>Silahkan Log-In dulu, kalau belum punya akun silahkan Sign-Up</h3>
          </div>
          <div class="tombol">
            <a href="login.php"><button class="btnlogin">Log-In</button></a>
            <a href="register.php"><button class="btnsignup">Sign-Up</button></a>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
