<?php
$host = "sql113.infinityfree.com";
$user = "if0_41930703";
$pass = "0u4cst2RQka5";
$db   = "if0_41930703_ibravlyv";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database baglanmadi");
}
$conn->set_charset("utf8mb4");
?>