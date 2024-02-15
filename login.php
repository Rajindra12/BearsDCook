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
            <p>Username</p>
            <input
              type="text"
              name="user"
              placeholder="Username"
              class="inpute"
            />
            <p>Password</p>
            <input
              type="password"
              name="pass"
              placeholder="Password"
              class="inpute"
            />
            <button class="buttone">Login</button>
          </form>
          <div class="forgot">
            <a href="register.html" class="register">Register</a>
            <a href="#" class="forgot_pass">Forgot Password</a>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
