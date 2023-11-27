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

    
    <h2>Konu Başlığı</h2>

    <strong>Konu Sahibi</strong> <a href="profil.php?kadi=Emre">Emre Ceyhan</a>

    <p>
        Konu Mesajlar

    </p>

    <hr>
    <h3>Yorumlar:</h3>
    <a href="profil.php?kadi=iremaksoy"><strong>İrem Aksoy</strong></a><br>
    <p>
        falan filan falan filter_input_array
    </p>
    <small>Tarih</small>
    
    <hr>

    <h3>Yorumlar:</h3>
    <a href="profil.php?kadi=iremaksoy"><strong>İrem Aksoy</strong></a><br>
    <p>
        falan filan falan filter_input_array
    </p>
    <small>Tarih</small>

    <hr>
    <h3>Yorumlar:</h3>
    <a href="profil.php?kadi=iremaksoy"><strong>İrem Aksoy</strong></a><br>
    <p>
        falan filan falan filter_input_array
    </p>
    <small>Tarih</small>
    <hr>

    <h4>Yorum Yap</h4>

    <form action="" method="post">
        <textarea name="yorum" cols="30" rows="10"></textarea>
            <input type="submit" value="Yorum Yap">
        
    </form>
    
// yorum yapabilmek için <a href="uyelik.php">giriş yap</a>ın yada <a href="uyelik.php?q=kayit">kayıt ol</a>un.






</center>