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
            <label for="nama">Nama</label>
            <br>
            <input
            type="text"
            name="nama"
            placeholder="Nama"
            class="inpute"
            required
            />
            <br>
            <label for="username">Username</label>
            <br>
            <input
            type="text"
            name="username"
            placeholder="Username"
            class="inpute"
            required
            />
            <br>
            <label for="password">Password</label>
            <br>
            <input
            type="password"
            name="password"
            placeholder="Password"
            class="inpute"
            required
            />
            <br>
            <label for="email">Email</label>
            <br>
              <input
              type="email"
              name="email"
              placeholder="Email"
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