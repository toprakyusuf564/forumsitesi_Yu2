<a href="indef.php"><h1> HASBİHAL</h1></a>

<?php
if (@$_SESSION["uye_id"]) {
#sadece uyeler gorsun
echo '<a href="profil.php?kadi='.@$_SESSION["uye_kadi"].'">Profilime Git</a>
<a href="uyelik.php?p=cikis">Çıkış Yap</a>';

} else {
#sadece uye olmayanlar gorsun
echo '<a href="uyelik.php?p=kayit">ÜYE OL</a> yada <a href="uyelik.php">GİRİŞ YAP</a>';

}



?>
