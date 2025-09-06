<?php
    $mahasiswa = [
        ["Naufal Bintang Pradana Himawan", "2407411049", "Teknik Informatika", "naufalbintangpradana@gmail.com"],
        ["Nugroho Nur Cahyo", "2407411058", "Teknik Informatika", "nugrohocurcahyo@gmail.com"],
        ["Zaskia Bening Mulia", "2407411057", "Teknik Informatika", "zaskiabeningmulia@gmail.com"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <?php foreach($mhs as $data): ?>
            <li><?= $data ?></li>
        <?php endforeach ?>
    </ul>
    <?php endforeach ?>
</body>
</html>