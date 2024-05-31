<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BearsDCook</title>
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
        .form_upload {
            width: 80%;
            margin: 50px auto;
            display: flex;
            justify-content: center;
        }
        .form {
            border: 2px solid var(--primary-color);
            border-radius: 10px;
            padding: 20px;
            width: 100%;
        }
        .upload_resep label {
            font-size: 20px;
        }
        .upload_resep input {
            width: 100%;
            height: 25px;
        }
        #deskripsi {
            width: 100%;
            height: auto;
            resize: none;
        }
        #langkah {
            width: 100%;
            height: auto;
            user-select: none;
        }
        .upload_submit button {
            color: #FFF;
            background-color: var(--primary-color);
            padding: 5px 10px;
            border: none;
            border-radius: 10px;
        }
        .upload_submit button:hover {
            text-decoration: underline;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
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
                <li class="header__navItems"><a href="index.php">Home</a></li>
                <li class="header__navItems"><a href="courses.php">Courses</a></li>
                <li class="header__navItems"><a href="profil.php">Profil</a></li>
                <li class="header__navItems"><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <hr />
    <div class="form_upload">
        <form action='prosesuploadresep.php' method='post' class="form" enctype='multipart/form-data'>
            <div class="upload_resep">
                <label for="cover">Cover :</label>
                <br>
                <input id="cover" type="file" name="cover" required>
                <br>
                <label for="judul">Judul :</label>
                <br>
                <input id="judul" type="text" name="judul" autocomplete="off" placeholder="Judul..." required>
                <br>
                <label for="deskripsi">Deskripsi :</label>
                <br>
                <!-- <input id="deskripsi" type="text" name="deskripsi"> -->
                <textarea name="deskripsi" id="langkah" rows="10" placeholder="Deskripsi..." required></textarea>
                <br>
                <label for="langkah">Langkah-langkah :</label>
                <br>
                <!-- <input id="langkah" type="text" name="langkah"> -->
                <textarea name="langkah" id="langkah" rows="10" placeholder="Langkah-langkah..." required></textarea>
                <br>
                <label for="vidio">Url vidio (jika ada) :</label>
                <br>
                <input id="vidio" type="text" name="vidio" placeholder="Url vidio..">
                <br>
                <label for="level">Level Difficulty:</label>
                <br>
                <select name="level" id="level" required>
                  <option value="1">Level 1</option>
                  <option value="2">Level 2</option>
                  <option value="3">Level 3</option>
                  <option value="4">Level 4</option>
                  <option value="5">Level 5</option>
                </select>
            </div>
            <div class="upload_submit">
                <br>
                <button type='submit' name='submit'>Upload Recipe</button>
            </div>
        </form>
    </div>
    <footer>
        <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
</body>
</html>
