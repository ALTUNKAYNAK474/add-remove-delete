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
    <title>Güncelle</title>
</head>
<body bgcolor="#ccc">
<h1 style="text-align: center;font-size:50px;">Güncelle</h1>
<div class="form">
<form action="" method="GET">
        <input type="hidden" name="id" placeholder="No" value="<?= isset($satirg['id']) ? $satirg['id'] : '' ?>" required><br>
        <input type="text" name="oad" placeholder="Adı" value="<?= isset($satirg['ad']) ? $satirg['ad'] : '' ?>" required><br>
        <input type="text" name="osad" placeholder="Soyadı" value="<?= isset($satirg['soyad']) ? $satirg['soyad'] : '' ?>" required><br>
        <input type="text" name="ocins" placeholder="Cinsiyet" value="<?= isset($satirg['cinsiyet']) ? $satirg['cinsiyet'] : '' ?>" required><br>
        <input type="date" name="odog" placeholder="Dogum Tarihi" value="<?= isset($satirg['dogumtarih']) ? $satirg['dogumtarih'] : '' ?>" required><br>
        <input type="submit" name="guncel" value="Güncelle" style="float: right; background-color: #be7e12;">
        <input type="submit" value="Ekle" style="background-color: #45c449;" onclick="location.href='kayit.php'">
        <input type="submit" value="Liste" style="float: left; background-color: #45c449;" onclick="location.href='index.php'">
    </form>
</div>
</body>
</html> 