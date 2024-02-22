<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <main>
      <div class="container">
        <h1>Sign-Up</h1>
        <br />
        <div class="signup">
          <form action="prosesregister.php" method="post">
            <p>Nama</p>
            <input
              type="text"
              name="nama"
              placeholder="Username"
              class="inpute"
              required
              />
            <p>Username</p>
              <input
              type="text"
              name="username"
              placeholder="Username"
              class="inpute"
              required
              />
            <p>Password</p>
              <input
              type="password"
              name="password"
              placeholder="Password"
              class="inpute"
              required
            />
            <input class="btn" type="submit" name="Submit" value="Register" />
          </form>
          <div class="forgot">
            <a href="login.php" class="login">login</a>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>