<?php

// Formdan gelen verileri al
$username = $_POST["username"];
$password = $_POST["password"];


$dogru_mail = "b251210563@sakarya.edu.tr";
$dogru_sifre = "b251210563";

// boş alan kontrolü
if(empty($username) || empty($password)){
    header("Location: login.php?hata=bos");
    exit();
}

// bilgiler doğru mu 
if($username == $dogru_mail && $password == $dogru_sifre){
    

    $ogrNo = "b251210563";
    header("Location: basarili.php?ogrNo=$ogrNo");
    exit();

}else{
    header("Location: login.php?hata=yanlis");
    exit();
}

?>