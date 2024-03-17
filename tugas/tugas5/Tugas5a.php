<?php

$mahasiswa = [
    [
        "nama" => "Chandra Harkat Raharja",
        "nrp" => "233040089",
        "email" => "chandrahr118@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "h1.jpg"
    ],
    [
        "nama" => "Frade",
        "nrp" => "233040011",
        "email" => "fradestupid@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "h2.jpg"
    ],
    [
        "nama" => "Renoir",
        "nrp" => "233040022",
        "email" => "Renoirtank@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "h3.jpg"
    ],
    [
        "nama" => "kurt",
        "nrp" => "233040033",
        "email" => "blackkurt@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "h4.jpg"
    ],
    [
        "nama" => "Ajax",
        "nrp" => "233040044",
        "email" => "Ajaxmotel@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "h5.jpg"
    ],
    [
        "nama" => "Doss",
        "nrp" => "233040055",
        "email" => "Dossmafia@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "h6.jpg"
    ],
    [
        "nama" => "Bernard",
        "nrp" => "233040066",
        "email" => "Bernardbear@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "h7.jpg"
    ],
    [
        "nama" => "Rolf",
        "nrp" => "233040077",
        "email" => "Rolfdawolf@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "h8.jpg"
    ],
    [
        "nama" => "Porrero",
        "nrp" => "233040088",
        "email" => "Porreropororo@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "h9.jpg"
    ],
    [
        "nama" => "Derwin",
        "nrp" => "233040099",
        "email" => "Capnderwin@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "h10.jpg"
    ],


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

    <?php foreach ($mahasiswa as $mahaw): ?>
        <ul>
            <li><img src="img/<?= $mahaw["gambar"] ?>" alt=""></li>

            <li>Nama :
                <?= $mahaw["nama"] ?>
            </li>

            <li>Nrp :
                <?= $mahaw["nrp"] ?>
            </li>

            <li>Email :
                <?= $mahaw["email"] ?>
            </li>

            <li>Jurusan :
                <?= $mahaw["jurusan"] ?>
            </li>
        </ul>
        <hr>
    <?php endforeach; ?>

</body>

</html>