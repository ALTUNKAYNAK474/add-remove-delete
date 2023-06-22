<?php
include "baglan.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kayıt</title>
</head>
<body bgcolor="#ccc">
<h1 style="text-align: center;font-size:50px;">Öğrenci Kayıt</h1>
    <div class="form">
    <form action="index.php" method="POST">
    <input type="text" name="oad" placeholder="Adı" required><br>
    <input type="text" name="osad" placeholder="Soyadı" required><br>
    <input type="text" name="ocins" placeholder="Cinsiyet" required><br>
    <input type="date" name="odog" placeholder="Dogum Tarihi" required><br>
    <input type="submit" value="Liste" style="background-color: #45c449;" onclick="location.href='index.php'">
    <input type="submit" name="kaydet" value="Yükle" style="float: right; background-color: #be7e12;"">
    </form></div>
</body>
</html>