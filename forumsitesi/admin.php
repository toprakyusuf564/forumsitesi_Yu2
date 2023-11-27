

<?php

  // Oturumu başlat
    session_start();
    // Veritabanı ayarları

    include 'ayar.php';

    // Ukas PHP

    include 'ukas.php';

    // Fonksiyonlar

    include 'funch.php';

    if (!@$_SESSION["uye_onay"] == 1) {

        //admin degılse


        echo '<center><h1>Sadece Yöneticiler Görebilir</h1><center>';
        
        //alttaki kodlar calısmasın

        exit;
    }

    
?>

<center>

<?php include 'header.php'; // Header / ÜST BİLGİ ?>

<br><br>


<h2>Admin Paneli</h2>
<hr>
<h3>Kategori Ekle</h3>

<form action="" method="post">
    <strong>Kategori Ekle:</strong>
    <input type="text" name="Kategori">
    <br>
    
            <input type="submit" value="Kategori Oluştur">
        
    </form>

    <hr>


    <ol>
        <li><a href="">Kategorimiz</a></li>
        <li><a href="">Kategorimiz</a></li>
        <li><a href="">Kategorimiz</a></li>
        <li><a href="">Kategorimiz</a></li>
        <li><a href="">Kategorimiz</a></li>
        <li><a href="">Kategorimiz</a></li>
        <li><a href="">Kategorimiz</a></li>
        <li><a href="">Kategorimiz</a></li>
        <li><a href="">Kategorimiz</a></li>
        <li><a href="">Kategorimiz</a></li>
    </ol>
    







</center>