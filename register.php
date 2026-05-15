<?php
require 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['reg-username'];
    $email = $_POST['reg-email'];
    $name = $_POST['reg-name'];
    $surname = $_POST['reg-surname'];
    $password = $_POST['reg-password'];
    $passwordConfirm = $_POST['reg-password-confirm'];
    if ($password !== $passwordConfirm) {
    echo "Şifreler uygun deyil!";
    exit();
}
    $pass = password_hash($_POST['reg-password'], PASSWORD_DEFAULT); 

    $check = $conn->prepare("SELECT id FROM users WHERE username=? OR email=?");
    $check->bind_param("ss", $user, $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
    echo "Bu istifadəçi artıq mövcuddur!";
    exit();
}

    $sql = "INSERT INTO users (name, surname, username, email, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $surname, $user, $email, $pass);

    if ($stmt->execute()) {
        header("Location: login.php");
    exit();
    } else {
        echo "Hata: " . $conn->error;
    }
}
?>