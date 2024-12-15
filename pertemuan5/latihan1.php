<?php 
// Array 
// Sebuah variabel yg bisa menampung lebih dari satu nilai
// elemen pada array boleh memiliki tipe data yg berbeda
// pasangan antara key dan value
// key nya adalah index yg dimulai dari 0,1,2,3...

// membuat array
// cara lama
$hari = array ("senin", "selasa", "rabu");

// cara baru
$bulan = ["januari", "februari", "maret"];
$arrl = [123, "tulisan", false];

// menampilkan array
// var_dump () / print_r ()
// tiap" elemen pd array pasti ada index
// index dimulai dari 0,1,2,3 ...
var_dump ($hari);
echo "<br>";
print_r ($bulan);
echo "<br>";

// menampilkan 1 elemen pd array
echo $arrl [0];
echo "<br>";
echo $bulan [1];

// menambahkan elemen baru pd array
var_dump ($hari);
$hari [] = "kamis";
$hari [] = "Jum'at";
echo "<br>";
var_dump ($hari);
?>