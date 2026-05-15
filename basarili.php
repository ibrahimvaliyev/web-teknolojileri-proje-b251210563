<?php
$ogrNo = $_GET["ogrNo"];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Başarılı Giriş</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-5 text-center shadow">
    <h1 class="text-success">Hoşgeldiniz <?php echo $ogrNo; ?></h1>
</div>

</body>
</html>