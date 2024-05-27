<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
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
      background-image: linear-gradient(to bottom right, #211C6A, #59B4C3);
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
      color: #FFF;
    }

    label {
      color: #FFF;
    }

    .update {
      border: solid 3px black;
      padding: 40px;
      border-radius: 10px;
      height: auto;
      width: auto;
      margin-top: -30px;
      font-size: 20px;
    }

    .inpute {
      color: #000;
      margin-bottom: 15px;
      padding: 10px;
      border-radius: 10px;
      border: solid 1px #000;
      background-color: #EFF396;
    }

    .btn {
      padding: 3px;
      border-radius: 10px;
      background-color: #EFF396;
      color: var(--greenish);
    }

    .forgot {
      margin-top: -13px;
    }

    .forgot a {
      text-decoration: none;
    }

    .login {
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
  <!-- Pastikan Anda sudah mengganti nama kolom dan tabel sesuai dengan struktur database Anda. Selain itu, pastikan untuk menambahkan fitur keamanan dan validasi input sesuai kebutuhan aplikasi Anda. -->
  <?php
  require '../koneksi.php';

  // Inisialisasi variabel
  $updateId = $_GET['updateid'] ?? null;

  // Jika updateId tidak ada, arahkan kembali ke halaman data
  if (!$updateId) {
    header("Location: admins.php");
    exit();
  }

  // Proses form update
  if (isset($_POST['submit'])) {
      $nama = $_POST["nama"];
      $username = $_POST["username"];
      $password = $_POST["password"];
      $email = $_POST["email"];
      $role = $_POST["role"];

      // Update data ke database
      $updateQuery = "UPDATE user SET nama='$nama', username='$username', password='$password', email='$email', role='$role' WHERE id_user='$updateId'";
      $updateResult = mysqli_query($mysqli, $updateQuery);

      if (!$updateResult) {
          die("Update failed: " . mysqli_error($mysqli));
      }

      // Redirect kembali ke halaman data setelah berhasil diupdate
      header("Location: admins.php");
      exit();
  } else {
      // Ambil data pengguna yang akan diupdate dari database
      $query = "SELECT * FROM user WHERE id_user = $updateId";
      $result = mysqli_query($mysqli, $query);

      if (!$result) {
          die("Query failed: " . mysqli_error($mysqli));
      }

      if (mysqli_num_rows($result) == 0) {
          die("Data tidak ditemukan");
      }

      $row = mysqli_fetch_assoc($result);
  }

  // Tutup koneksi database
  mysqli_close($mysqli);
  ?>
  <main>
    <div class="container">
      <h1>Update Data</h1>
      <br>
      <form action="update.php?updateid=<?php echo $updateId; ?>" class="update" method="post">
          <label for="nama">Nama:</label>
          <br>
          <input class="inpute" type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
          <br>
    
          <label for="username">Username:</label>
          <br>
          <input class="inpute" type="text" name="username" value="<?php echo $row['username']; ?>" required>
          <br>
    
          <label for="password">Password:</label>
          <br>
          <input class="inpute" type="password" name="password" value="<?php echo $row['password']; ?>" required>
          <br>
    
          <label for="email">Email:</label>
          <br>
          <input class="inpute" type="email" name="email" value="<?php echo $row['email']; ?>" required>

          <br>

          <label for="role">Role:</label>
          <br>
          <select class="inpute" name="role">
              <option value="admin" <?php echo ($row['role'] == 'admin') ? 'selected' : ''; ?>>admin</option>
              <option value="user" <?php echo ($row['role'] == 'user') ? 'selected' : ''; ?>>user</option>
          </select>
    
          <button class="btn" name="submit" type="submit">Update</button>
          <br>
          <div class="forgot">
            <a href="admins.php" class="login">kembali</a>
          </div>
      </form>
    </div>
  </main>
</body>
</html>
