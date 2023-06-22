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
    <title>SQL</title>
</head>
<body bgcolor="#569">
    <h1 style="text-align: center;font-size:50px; color:#fff;">Öğrenci Listesi</h1>
    <table bgcolor="#cca">
        <tr>
            <th>ID</th>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>Cinsiyet</th>
            <th>Sınıf</th>
            <th>Doğum Tarihi</th>
            <th >Araçlar</th>
        </tr>
        <?php 
        foreach ($ogrenciler as $ogrenci) {?> 
        <tr>
            <td style="text-align: center;"><?=$ogrenci["id"];?></td>
            <td><?=$ogrenci["ad"];?></td>
            <td><?=$ogrenci["soyad"];?></td>
            <td style="text-align: center;"><?=$ogrenci["cinsiyet"];?></td>
            <td style="text-align: center;"><?=$ogrenci["id"];?></td>
            <td style="text-align: center;"><?=$ogrenci["dogumtarih"];?></td>
            <td style="text-align: center;">
                <a href="?sil=<?= $ogrenci['id'] ?>"><button class="silbt" onclick="return confirm('Kullanıcıyı silmek istiyor musunuz?')">Kaldır</button>
                <a href="guncelle.php?id=<?= $ogrenci['id'] ?>"><button class="guncellebt">Düzelt</button></a>
                
            </td>
        </tr>
        <?php }?> 
        <!-- <tbody>
            <?php while ($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>

            <?php } ?>
        </tbody> -->
    </table>
    <button onclick="location.href='kayit.php'" class="eklebt">Yeni Öğrenci</button>
</body>
</html>