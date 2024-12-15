<?php 
//Date : untuk menampilkan tanggal dgn format tertentu
echo date ("l, d-M-Y");
// date "d" : tanggal
// date "l" : hari
// date "M" : bulan. date "m" : bulan dlm bentuk angka
// date "Y" : tahun


// Time
// UNIX Timestamp / EPOCH time
// detik yg sudah berlalu sejak 1 Jan 1970
// echo time();
echo date ("l, d-M-Y", time ()-60*60*24*100);
//+ : hari kedepan
//- : hari kebelakang
//60 : detik
//60 : menit
//24 : 1 hari
//100 : berapa hari kedepan

// mktime
// membuat detik sendiri 
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date ("l", mktime (0,0,0,2,27,2008));
/* hasilnya adalah detik yg telah berlalu dari
 1 Jan 1970-27 Feb 2008 */

 // strtotime
 echo date ("l", strtotime ("27 feb 2008"));
?>