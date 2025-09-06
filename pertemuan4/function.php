<?php
    function welcome($waktu = "Datang", $nama = "Admin"){
        return "Selamat $waktu, $nama";
    }
    function waktu($detik){
        return "sekarang jam $detik";
    }

    date_default_timezone_set("Asia/Jakarta");
    $detik = date("h:i:s");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <?= welcome("Pagi", "arixa"); ?>
    <?= waktu($detik) ?>
</body>
</html>