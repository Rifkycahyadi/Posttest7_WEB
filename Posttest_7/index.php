<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                alert('Harap login terlebih dahulu');
                document.location.href = 'login.php';
            </script>";
    }
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>NuKuliner</title>
    <script src="theme.js"></script>
<body>
    <script>
        alert("Anda Masuk ke NuKuliner!");
    </script>
    <div class="header">
        <div class="navbar">
            <img src="kuliner.png" class="Logo">
            <ul class="navList">
                <li><a href="home.php">Masakan</a></li>
                <li><a href="#">Terbaru</a></li>
                <li><a href="#">Daerah</a></li>
                <li><a href="about.html">About Me</a></li>
                <li id="goods_id"><a href="logout.php">Log out</a></li>
        <button onclick="myFunction()">Tema</button>
        
            </ul>
        </div>
    </div>
    <div class="banner">
        <div class="content">
            <h1 >Nusantara Kuliner</h1>
            <h2 class="KMN">Kenali Masakan Nusantara</h2>
        </div>
    </div>

    <div class="Footer">
        <div class="Motto">
            <h3>NuKuliner</h3>
            <h3>Jelajah Masakan Nusantara</h3>
        </div>
    </div>
    
</body>
</html>