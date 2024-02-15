<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <div class="container">
      <h1>Register</h1>
      <form action="prosesregister.php" method="post" name="form1">
        <table>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required /></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><input type="text" name="username" required /></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" required /></td>
          </tr>
          <tr>
            <td>level</td>
            <td>
              <select name="level" id="level" required>
                <option disabled selected>Pilih</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
              </select>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input class="btn" type="submit" name="Submit" value="Register" />
            </td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
