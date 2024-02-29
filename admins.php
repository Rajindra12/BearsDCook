<?php

require 'koneksi.php';

// Lakukan query
$query = "SELECT * FROM user";
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

        .btn button {
        padding: 15px 25px;
        border: none;
        border-radius: 6px;
        }

        .header__loginbtn {
        color: var(--primary-color);
        }

        .header__signupbtn {
        background-color: var(--primary-color);
        color: #fff;
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

        table {
            border-collapse: collapse;
            width: 100%;
            background-color:
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            border-color: var(--greenish);

        }
        </style>
    </head>
    <body>
        <header>
        <div class="header__logo">
            <img src="bahan\goofyahh.png" alt="logo" />
            <h1 class="header__logotext">BearDCook</h1>
        </div>

        <nav>
            <ul class="header__nav">
            <li class="header__navItems"><a href="index.php">Home</a></li>
            <li class="header__navItems"><a href="courses.php">Courses</a></li>
            <li class="header__navItems"><a href="orangnya.php">Orangnya</a></li>
            </ul>
        </nav>

        <div class="btn">
            <button class="header__loginbtn"><a href="login.php">Login</a></button>
            <button class="header__signupbtn"><a href="register.php">Sign-Up</a></button>
        </div>
        </header>

        <h2>Data Tabel</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
            <?php
            // Tampilkan data dari hasil query
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["role"] . "</td>";

                    // Tambahkan kolom lain sesuai kebutuhan
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Tidak ada data yang ditemukan</td></tr>";
            }

        
            ?>
        </table>

        <a class = 'kembali' href="admin.php">Kembali</a>

    </body>
</html>

    <?php
    // Tutup koneksi database
    mysqli_close($mysqli);
    ?>