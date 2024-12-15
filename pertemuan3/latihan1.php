<?php  
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array


// FOR
/* didalam "for" terdapat for (inisialisasi; kondisi terminasi; increment/decrement) */
# inisialisasi (nilai awal): kondisi terminasi, increment/decrement
// inisialisasi : untuk menentukan variabel awal untuk pengulangannya.
// kondisi terminasi : digunakan untuk menghentikan pengulangnnya
// increment/decrement : supaya pengulangnnya bisa maju atau mundur
 for ($i = 0; $i < 5; $i++) {
    echo "Hello Friend! <br>";
 }

 // WHILE
 // selama kondisi nya bernilai true, lakukan apapun yang ada di dalam kurung kurawalnya 
 // cek dlu lalu jalankan
 // jika kondisi nya false, maka tidak bisa dijalankan
 $i = 0; //inisialisasi
 while ($i < 5 ) { //kondisi
    echo "Hello Friend! <br>";
$i++; //increment/decrement
 }

 // DO.. WHILE
 // jalankan dulu lalu cek kondisi nya 
 // jika kondisi nya false, maka blok nya akan dijalankan dulu satu kali
 $i = 0;
 do {
echo "Hallo Friend! <br>";
$i++; // $i++ = $i+1
} while ($i < 5);
?>