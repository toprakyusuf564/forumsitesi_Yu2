

<?php

  // Oturumu başlat
    session_start();
    // Veritabanı ayarları

    include 'ayar.php';

    // Ukas PHP

    include 'ukas.php';

    // Fonksiyonlar

    include 'funch.php';

    
?>

<center>

<?php include 'header.php'; // Header / ÜST BİLGİ ?>

<br><br>


<h2>Konu Paylaşma</h2>

<form action="" method="post">
    <strong>Konu Adı:</strong>
    <input type="text" name="ad"><br>
    <strong>Konu Mesaji:</strong><br>
        <textarea name="yorum" cols="30" rows="10"></textarea>
            <input type="submit" value="Konuyu Aç">
        
    </form>
    
// Konu Paylaşabilmek için <a href="uyelik.php">giriş yap</a>ın yada <a href="uyelik.php?q=kayit">kayıt ol</a>un.






</center>