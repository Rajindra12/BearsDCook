<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
        overflow: hidden;
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
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-style: normal;
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
            <h1>Welcome to BearsDcook</h1>
            <h3>Please log-in first, if you don't have an account, please sign-up</h3>
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
