<?php
    // cek apakah ada data atau tidak di $_GET
    if(!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["email"]) || !isset($_GET["prodi"]) || !isset($_GET["gambar"])){
        header("Location: latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt="" style="width:200px; height: 200px;"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["prodi"]; ?></li>
        <li><a href="<?= $_GET["ig"]; ?>" target="_blank">Instagram</a></li>
    </ul>
    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>