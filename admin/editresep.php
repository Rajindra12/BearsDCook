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
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-image: linear-gradient(to bottom right, #211C6A, #59B4C3);
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: auto;
      width: 70%;
      background: rgba(255, 255, 255, 0.9);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 30px;
      color: #211C6A;
      margin-bottom: 20px;
    }

    label {
      color: #211C6A;
      margin-top: 10px;
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
      padding: 10px;
      border-radius: 10px;
      background-color: var(--primary-color);
      color: #fff;
      border: none;
      cursor: pointer;
      margin-top: 20px;
    }

    .btn:hover {
      background-color: var(--yellowish);
      color: var(--greenish);
    }

    textarea, input[type="text"], input[type="file"], select {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-top: 5px;
      margin-bottom: 10px;
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
      .container {
        width: 80%;
      }
    }
    </style>
</head>
<body>
  <?php
  require '../koneksi.php';

  $updateId = $_GET['updateid'] ?? null;

  if (!$updateId) {
    header("Location: admins.php");
    exit();
  }

  // Proses form update
  if (isset($_POST['submit'])) {
      $judul = $_POST["judul"];
      $deskripsi = $_POST["deskripsi"];
      $langkah = $_POST["langkah"];
      $vidio = $_POST["vidio"];
      $level = $_POST["level"];

      // Proses upload cover
      $cover = $_FILES['cover']['name'];
      $cover_tmp = $_FILES['cover']['tmp_name'];
      $cover_folder = '../uploads/' . $cover;

      if (move_uploaded_file($cover_tmp, $cover_folder)) {
          // Update data ke database
          $updateQuery = "UPDATE resep SET judul='$judul', deskripsi='$deskripsi', langkah='$langkah', cover='$cover', vidio='$vidio', level='$level' WHERE id_resep='$updateId'";
          $updateResult = mysqli_query($mysqli, $updateQuery);

          if (!$updateResult) {
              die("Update failed: " . mysqli_error($mysqli));
          }

          // Redirect kembali ke halaman data setelah berhasil diupdate
          header("Location: admins.php");
          exit();
      } else {
          echo "Failed to upload cover.";
      }
  } else {
      // Ambil data pengguna yang akan diupdate dari database
      $query = "SELECT * FROM resep WHERE id_resep = $updateId";
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
  <div class="container">
    <h1>Update Data</h1>
    <form action="" method="post" class="form" enctype="multipart/form-data">
      <label for="cover">Cover:</label>
      <input id="cover" type="file" name="cover" required>

      <label for="judul">Judul:</label>
      <input id="judul" type="text" name="judul" autocomplete="off" placeholder="Judul..." value="<?php echo $row['judul']; ?>" required>

      <label for="deskripsi">Deskripsi:</label>
      <textarea name="deskripsi" id="deskripsi" rows="5" placeholder="Deskripsi..." required><?php echo $row['deskripsi']; ?></textarea>

      <label for="langkah">Langkah-langkah:</label>
      <textarea name="langkah" id="langkah" rows="10" placeholder="Langkah-langkah..." required><?php echo $row['langkah']; ?></textarea>

      <label for="vidio">Url vidio (jika ada):</label>
      <input id="vidio" type="text" name="vidio" value="<?php echo $row['vidio']; ?>" placeholder="Url vidio...">

      <label for="level">Level Difficulty:</label>
      <select name="level" id="level" required>
        <option value="1" <?php if($row['level'] == 1) echo 'selected'; ?>>Level 1</option>
        <option value="2" <?php if($row['level'] == 2) echo 'selected'; ?>>Level 2</option>
        <option value="3" <?php if($row['level'] == 3) echo 'selected'; ?>>Level 3</option>
        <option value="4" <?php if($row['level'] == 4) echo 'selected'; ?>>Level 4</option>
        <option value="5" <?php if($row['level'] == 5) echo 'selected'; ?>>Level 5</option>
      </select>

      <button type="submit" name="submit" class="btn">Update Recipe</button>
    </form>
  </div>
</body>
</html>
