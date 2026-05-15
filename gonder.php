<?php
require "db.php";

$ad     = $_POST["ad"];
$soyad  = $_POST["soyad"];
$email  = $_POST["email"];
$konu   = $_POST["konu"];
$mesaj  = $_POST["mesaj"];

$sql = "INSERT INTO mesajlar (ad, soyad, email, konu, mesaj)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $ad, $soyad, $email, $konu, $mesaj);
$stmt->execute();

header("Location: index.php");
exit();
?>