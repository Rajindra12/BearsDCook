<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
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
