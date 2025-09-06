<?php 
    // $mahasiswa = [
    //     ["Naufal Bintang Pradana Himawan", "2407411049", "naufalbintangpradana@gmail.com", "Teknik Informatika"],
    //     ["Nugroho Nur Cahyo", "2407411058", "nugrohonurcahyo@gmail.com", "Teknik Informatika"]
    // ];

    // array associative
    // definisinya sama seperti array numerik, kecuali
    // key-nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
            "nama" => "Naufal Bintang Pradana Himawan",
            "nim" => "2407411049",
            "email" => "naufalbintangpradana@gmail.com",
            "prodi" => "Teknik Informatika",
            "gambar" => "1.jpg"
        ],
        [
            "nama" => "Nugroho Nur Cahyo",
            "nim" => "2407411058",
            "email" => "nugrohonurcahyo@gmail.com",
            "prodi" => "Teknik Informatika",
            "gambar" => "2.jpg"
        ]
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
        <li>
            <img src="img/<?= $mhs["gambar"]?>" style="width:100px; height: 100px;">
        </li>
        <li>Nama    : <?= $mhs["nama"] ?></li>
        <li>NIM     : <?= $mhs["nim"] ?></li>
        <li>Email   : <?= $mhs["email"] ?></li>
        <li>Prodi   : <?= $mhs["prodi"] ?></li>

    </ul>
    <?php endforeach ?>
</body>
</html>