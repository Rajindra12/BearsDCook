<?php

require '../koneksi.php';

// Cek apakah form pencarian disubmit
if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM user WHERE nama LIKE '%$keyword%' OR username LIKE '%$keyword%' OR email LIKE '%$keyword%'";
} else {
    $query = "SELECT * FROM user";
}

$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel</title>
    <style>
        :root {
            --primary-color: #61a3ba;
            --secondary-color: #ffffdd;
            --yellowish: #d2de32;
            --greenish: #a2c579;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            background-color: var(--secondary-color);
        }

        header {
            background-color: var(--greenish);
            padding: 20px 120px 20px 104px;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .header__logo {
            display: flex;
            align-items: center;
        }

        .header__logo img {
            width: 35px;
            height: 45px;
            margin-right: 20px;
        }

        .header__nav {
            display: flex;
            gap: 20px;
            padding-top: 10px;
        }

        .header__navItems {
            list-style: none;
        }

        .header__navItems a {
            text-decoration: none;
            color: #000;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .title {
            text-align: center;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto 100px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            border-color: var(--greenish);
        }

        .update {
            background-color: #1E90FF;
            padding: 5px;
            border-radius: 5px;
        }

        .delete {
            background-color: #D30000;
            padding: 5px;
            border-radius: 5px;
        }

        .link {
            text-decoration: none;
            color: #FFFFFF;
        }

        .link:hover {
            text-decoration: underline;
        }

        .id {
            font-weight: bold;
        }

        .search_add {
            width: 80%;
            margin: 0 auto;
            display: flex;
            flex-direction: row;
            align-items: flex-end;
            gap: 25px;
        }

        .plus {
            background-color: var(--yellowish);
            padding: 5px 10px;
            border-radius: 5px;
        }

        .pluss {
            text-align: center;
            text-decoration: none;
            color: #000;
        }

        .pluss:hover {
            color: #FFF;
            text-decoration: underline;
        }

        .search_input {
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #B5C18E;
        }

        .search_button {
            padding: 5px 10px;
            border-radius: 5px;
            background-color: var(--yellowish);
        }

        .gambar_profil {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
<header>
    <div class="header__logo">
        <img src="../bahan/goofyahh.png" alt="logo" />
        <h1 class="header__logotext">BearDCook</h1>
    </div>

    <nav>
        <ul class="header__nav">
            <li class="header__navItems"><a href="index.php">Recipes</a></li>
            <li class="header__navItems"><a href="feedback.php">Feedbacks</a></li>
            <li class="header__navItems"><a href="admins.php">Users</a></li>
            <li class="header__navItems"><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

<hr class=pemabatas>

<h2 class="title">Data Tabel</h2>

<div class="search_add">
    <div class="logout">
        <button class="plus"><a href="add.php" class="pluss">Add user</a></button>
    </div>
    <form action="" method="post">
        <input type="text" name="keyword" placeholder="Carilah user yang ingin anda cari...." size="50" class="search_input" autofocus autocomplete="off">
        <button type="submit" name="cari" class="search_button">Cari</button>
    </form>
</div>

<br>

<table>
    <tr>
        <th>ID_user</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Role</th>
        <th>Operation</th>
    </tr>
    <?php
    // Tampilkan data dari hasil query
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td class='id'>" . $row["id_user"] . "</td>";
            echo "<td><img src='../upload_foto/" . $row['foto'] . "' alt='foto' class='gambar_profil'></td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["role"] . "</td>";
            echo "<td><button class='update'><a href='update.php?updateid=" . $row['id_user'] . "' class='link'>Update</a></button> <button class='delete'><a href='delete.php?deleteid=" . $row['id_user'] . "' class='link'>Delete</a></button></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>Tidak ada data yang ditemukan</td></tr>";
    }
    mysqli_close($mysqli);
    ?>
</table>
</body>
</html>