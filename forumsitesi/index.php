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
    <table border="1">
        <tr>   
            <td>
                <strong>Yeni açılan konular</strong>
                <ul>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                </ul>
            </td>
            <td>

                <strong>Son Cevaplar</strong>
                <ul>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                </ul>
    
    
            </td>
                
            
        </tr>
        <tr>
            <td colspan="2">
                <h2>Kategoriler</h2>
                <ul>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                    <li><a href="">Konu</a></li>
                </ul>
            </td>
        </tr>
    </table>
</center>
        