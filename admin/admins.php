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

        .judul {
            margin-top: 7px;
        }

        .btn button {
        padding: 15px 70px;
        border: none;
        border-radius: 6px;
        }

        .header__signupbtn {
        background-color: var(--primary-color);
        color: #fff;
        }

        .title {
            text-align: center;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
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

        .logout {
            text-align: center;
        }

        .keluar {
            margin: 0 auto; /* This centers the element horizontally */
            /* You can also use margin: auto; to center both horizontally and vertically */
            background-color: var(--yellowish);
            padding: 5px;
            border-radius: 5px;
        }

        .keluars {
            text-align: center;
            text-decoration: none;
            color: #000;
        }

        .keluars:hover {
            color: #FFF;
            text-decoration: underline;
        }
        </style>
    </head>
    <body>
        <header>
        <div class="header__logo">
            <img src="bahan\goofyahh.png" alt="logo" />
            <h1 class="header__logotext">BearDCook</h1>
        </div>

        <div class="judul">
            <h1>ADMIN PAGE</h1>
        </div>

        <div class="btn">
            <button class="header__signupbtn">Halo, admin</button>
        </div>
        </header>

        <hr class=pemabatas>

        <h2 class="title">Data Tabel</h2>

        <table>
            <tr>
                <th>ID_user</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Role</th>
                <th>Operation</th>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
            <?php
            // Tampilkan data dari hasil query
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td class=id>" . $row["id_user"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["role"] . "</td>";
                    echo "<td>" . "<button class=update><a href=update.php?updateid=$row[id_user] class=link>Update</a></button>" . " " . "<button class=delete><a href=delete.php?deleteid=$row[id_user] class=link>Delete</a></button>" . "</td>";

                    // Tambahkan kolom lain sesuai kebutuhan
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Tidak ada data yang ditemukan</td></tr>";
            }

        
            ?>
        </table>
        <br>
        <div class="logout">
            <button class="keluar"><a href="login.php" class="keluars">Log-out</a></button>
            <button><a href="">Add user</a></button>
        </div>
    </body>
</html>

    <?php
    // Tutup koneksi database
    mysqli_close($mysqli);
    ?>