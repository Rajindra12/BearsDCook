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
        /* Your CSS styles */
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
        .form_upload{
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
        }
        .upload_foto{
        }
        .upload_submit {
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
            </ul>
        </nav>
    </header>
    <hr />
    <div class="form_upload">
        <form action='prosesupload.php' method='post' enctype='multipart/form-data'>
            <div class="upload_foto">
                <label for="foto">Foto :</label>
                <input id='foto' type='file' name='foto'>
            </div>
            <div class="upload_submit">
                <button type='submit' name='submit'>UPLOAD FOTO</button>
            </div>
        </form>
    </div>
    <footer>
        <p>&copy; 2023 Online Courses Platform. All rights reserved.</p>
    </footer>
</body>
</html>
