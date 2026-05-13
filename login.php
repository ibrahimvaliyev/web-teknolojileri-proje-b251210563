<?php
require 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: login.html");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE username=? OR email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $username);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user["password"])) {
    
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["username"] = $user["username"];

    echo "Giriş başarılı! <a href='index.html'>Ana sayfa</a>";

} else {
    echo "Kullanıcı adı veya şifre yanlış!";
}
?>