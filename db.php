<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "web_projesi";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database baglanmadi: " . $conn->connect_error);
}
?>