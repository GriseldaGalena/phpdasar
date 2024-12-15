<?php

// aritmatika
// + - * % /
$r = 10;
$s = 20;
echo $r+$s;

// penggabung string / concatenation / concat
// .
$nama_depan = "Griselda";
$nama_belakang = "Galena";
echo $nama_depan . " " . $nama_belakang;

// Assignment/Operator Penugasan
//  =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
$x -= 3;
$x *= 4;
echo $x;

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump (3 < 5); //hasil : bool (true)
var_dump (2 > 3); //hasil : bool (false)
var_dump (1 == "1"); //hasil : bool (true). karena perbandingan tidak melihat tipe data. jdi meskipun 1=string 1, hasilnya akan (true)

//Identitas (untuk mengecek identitas dari sebuah nilai)
// ===, !==
var_dump(1 !== "1"); //karena identitas melihat tipe data. jdi 1 !== string 1, hasilnya akan (true)
var_dump(1 === "1"); //karena identitas melihat tipe data. jdi 1 === string 1, hasilnya akan (false)

// Logika
// && (dan), || (or/atau), !
// && : semua nilai harus benar 
// || : tidak semua nilai harus benar
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x < 20 || $x % 2 == 0);

?>