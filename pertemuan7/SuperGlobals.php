<?php 

// SUPERGLOBALS
// variabelp global milik php
// merupakan Array Associative
// $_GET
// $_POST
// $_REQUEST
// $_COOKIE
// $_SERVER
// $_ENV
// $_SESSION

// var_dump($_SERVER);
// echo "<br>";
// echo $_SERVER["SERVER_NAME"];
// echo "<br>";


// $_GET["nama"] = "Griselda Galena Ja'an";
// $_GET["nik"] = "827361901";
// var_dump($_GET);

// var_dump($_GET);

$siswa = [
    [
    "nama" => "Griselda Galena Ja'an", 
    "nik" => "839292883",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "email" => "griseldagalena27@gmail.com",
    "gambar" => "teletubbies1.jpeg"
    ],
    [
    "nama" => "Dian Novitasari", 
    "nik" => "84828447",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "email" => "diannovi20@gmail.com",
    "gambar" => "teletubbies2.jpeg",
    ],
    [
    "nama" => "Astrid Octavian Syah", 
   "nik" => "84828447",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "email" => "astridoctavian29@gmail.com",
    "gambar" => "teletubbies3.jpeg",
    ],
    [
    "nama" => "Dara Izatul Mila", 
    "nik" => "839292883",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "email" => "daraizatul25@gmail.com",
    "gambar" => "teletubbies4.jpeg",
        ],
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
    <h1>Daftar Siswa</h1>
    <ul>
    <?php foreach ($siswa as $s) :?>
        <li>
            <a href="latihan2.php?nama=<?= $s["nama"];
            ?>&nik=<?= $s["nik"];?>&jurusan=<?= $s["jurusan"];
            ?>&email=<?= $s["email"];?>&gambar=<?= $s["gambar"];
            ?>"><?= $s["nama"]; ?></a>
        </li>
 <?php endforeach; ?>
 </ul>
</body>
</html>