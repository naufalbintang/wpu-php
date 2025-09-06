<?php
    // SUPERGLOBALS
    // variabel global milik php
    // merupakan array associative
    // var_dump($_GET);

    $mahasiswa = [
        [
            "nama" => "Naufal Bintang Pradana Himawan",
            "nim" => "2407411049",
            "email" => "naufalbintangpradana@gmail.com",
            "prodi" => "Teknik Informatika",
            "gambar" => "1.jpg",
            "ig" => "https://www.instagram.com/_naufalbintang_/"
        ],
        [
            "nama" => "Nugroho Nur Cahyo",
            "nim" => "2407411058",
            "email" => "nugrohonurcahyo@gmail.com",
            "prodi" => "Teknik Informatika",
            "gambar" => "2.jpg",
            "ig" => "https://www.instagram.com/nugroho.nc/"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $data): ?>
        <ul>
            <li>
                <a 
                href="latihan2.php?nama=<?= $data["nama"]; ?>&nim=<?= $data["nim"]; ?>&email=<?= $data["email"]; ?>&prodi=<?= $data["prodi"]; ?>&gambar=<?= $data["gambar"]; ?>&ig=<?= $data["ig"]; ?>">
                    <?= $data["nama"]?>
                </a>
            </li>
        </ul>
    <?php endforeach ?>
</body>
</html>