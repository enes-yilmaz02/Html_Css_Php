<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="websitesi";

$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);

if(!$baglan)
{
   die("veritabanı bağlantısı başarısız...".mysqli_connect_error());
}


?>