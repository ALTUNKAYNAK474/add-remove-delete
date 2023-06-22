<?php
try {
    $baglan = new PDO('mysql:host=localhost;dbname=kutuphane;charset=utf8', 'root', '');
    $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Bağlantı kurulamadı: ' . $e->getMessage();
}

//! Öğrenci tablosunu getirir.
$sql = "SELECT * FROM ogrenci";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();

$result = $sorgu->setFetchMode(PDO::FETCH_ASSOC);
$ogrenciler = $sorgu->fetchAll();

//! Ekle
if (isset($_POST["kaydet"])) {
    $sqle = "INSERT INTO ogrenci (ad, soyad, cinsiyet, dogumtarih) VALUES (?, ?, ?, ?)";
    $dizie = [
        $_POST["oad"],
        $_POST["osad"],
        $_POST["ocins"],
        $_POST["odog"],
    ];
    $sorgue = $baglan->prepare($sqle);
    $sonuce = $sorgue->execute($dizie);
    header("Location:index.php");
}
//! Sil
if (isset($_GET['sil'])) {
    $sqls = "DELETE FROM `ogrenci` WHERE `ogrenci`.`id` = ?";
    $sorgus = $baglan->prepare($sqls);
    $sorgus->execute([
        $_GET['sil']
    ]);
    header('Location:index.php');
}
$sqla = "SELECT * FROM ogrenci";
$sorgua = $baglan->prepare($sqla);
$sorgua->execute();
//! Güncelle
if (isset($_GET['guncel'])) {
    $sqlg = "UPDATE `ogrenci` SET `ad` = ?, `soyad` = ?, `cinsiyet` = ?, `dogumtarih` = ? WHERE `ogrenci`.`id` = ?";
    $dizig = [$_GET['oad'], $_GET['osad'], $_GET['ocins'], $_GET['odog'], $_GET['id']];
    $sorgug = $baglan->prepare($sqlg);
    $sorgug->execute($dizig);
    header("Location:index.php");
}
if (isset($_GET['id'])) {
    $sqlg = "SELECT * FROM ogrenci WHERE id = ?";
    $sorgug = $baglan->prepare($sqlg);
    $sorgug->execute([$_GET['id']]);
    $satirg = $sorgug->fetch(PDO::FETCH_ASSOC);
}   
?>