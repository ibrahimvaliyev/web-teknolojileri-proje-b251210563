<?php
require 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['reg-username'];
    $email = $_POST['reg-email'];
    $pass = password_hash($_POST['reg-password'], PASSWORD_DEFAULT); 

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $user, $email, $pass);

    if ($stmt->execute()) {
        echo "Kayıt Başarılı! <a href='login.html'>Giriş et</a>";
    } else {
        echo "Hata: " . $conn->error;
    }
}
?>