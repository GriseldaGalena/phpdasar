<?php 
// $siswa = [
//     ["Griselda Galena", "839292883", "Rekayasa Perangkat Lunak",
//              "griseldagalena27@gmail.com"]
//     ,["Dian Novi", "84828447", "Rekayasa Perangkat Lunak",
//              "diannovi20@gmail.com"]
//     ,["Dara Izatul Mila", "839292883", "Rekayasa Perangkat Lunak",
//              "daraizatul25@gmail.com"]
//     ,["Astrid Octavian Syah", "84828447", "Rekayasa Perangkat keras",
//              "astridoctavian29@gmail.com"]
//     ,["Galih Januar Dwi Arianto", "84828447", "Rekayasa Perangkat keras",
//              "galihjanuar22@gmail.com"]
//             ];

// Array Assosiatif
// definisinya sama seperti array numerik, kecuali..
// key-nya adalah string yang kita buat sendiri
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
        "gambar" => "teletubbies2.jpeg"
        ],
        [
        "nama" => "Astrid Octavian Syah", 
       "nik" => "84828447",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "email" => "astridoctavian29@gmail.com",
        "gambar" => "teletubbies3.jpeg"
        ],
        [
        "nama" => "Dara Izatul Mila", 
        "nik" => "839292883",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "email" => "daraizatul25@gmail.com",
        "gambar" => "teletubbies4.jpeg"
            ],
    ];
        echo $siswa [0] ["nama"];
?>
 
 <!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
<h1>Daftar Siswa</h1>

<?php foreach ($siswa as $s) :?>
 <ul>
    <li>
    <img src="img/<?= $s ["gambar"];?> ">
    </li>
    <li>Nama    :<?= $s ["nama"]; ?> </li>
    <li>NIK     : <?= $s ["nik"]; ?> </li>
    <li>Jurusan : <?= $s ["jurusan"]; ?> </li>
    <li>Email   :<?= $s ["email"]; ?> </li>
 </ul>

 <?php endforeach; ?>
</body>
</html>