<?php
require "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    $sql = "INSERT INTO messages(ad,soyad,email,konu,mesaj)
            VALUES('$ad','$soyad','$email','$konu','$mesaj')";

    if(mysqli_query($conn,$sql)){
        header("Location: iletisim.php?ok=1");
        exit();
    }else{
        echo "SQL ERROR: ".mysqli_error($conn);
    }
}
?>