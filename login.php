<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
      * {
  margin: none;
  padding: none;
}

body {
  background-image: linear-gradient(to bottom right, #d04848, #f3b95f);
  background-repeat: no-repeat;
  background-size: cover;
}

main {
  height: 100vh;
}

.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 90vh;
  width: 400px;
  margin: auto;
}

h1 {
  font-size: 30px;
  font-family: "Times New Roman", Times, serif;
}

.login {
  border: solid 3px black;
  padding: 40px;
  border-radius: 10px;
  height: auto;
  width: auto;
  margin-top: -30px;
  font-size: 20px;
}

.inpute {
  color: #fff;
  margin-bottom: 15px;
  padding: 10px;
  border-radius: 10px;
  background-color: #f3b95f;
}

.buttone {
  padding: 3px;
  border-radius: 10px;
  background-color: antiquewhite;
  color: #d04848;
}

.forgot {
  margin-top: -13px;
}

.forgot a {
  text-decoration: none;
}

.register {
  font-family: "Merriweather";
  font-size: 15px;
  font-style: italic;
}

::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  background: #666;
}

::-webkit-scrollbar-thumb {
  background: #232323;
}

@media (max-width: 480px) {
  .login-container {
    width: 80%;
  }
}

    </style>
  </head>
  <body>
    <main>
      <div class="container">
        <h1>log-in</h1>
        <br />
        <div class="login">
          <form action="proseslogin.php" method="post">
            <label for="username">Username</label>
            <br>
            <input
            type="text"
            name="username"
            placeholder="Username"
            class="inpute"
            />
            <br>
            <label for="password">Password</label>
            <br>
            <input
            type="password"
            name="password"
            placeholder="Password"
            class="inpute"
            />
            <button type="submit" class="buttone" name="submit">Login</button>
          </form>
          <div class="forgot">
            <a href="register.php" class="register">Register</a>
            <a href="index.php" class="register">Forgot Password</a>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
