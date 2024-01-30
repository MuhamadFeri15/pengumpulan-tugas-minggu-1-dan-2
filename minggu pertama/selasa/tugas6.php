<?php

// disuatu rumah produksi yang memiliki jam kerja 8 jam. jika pegawai bekerja melebihi jam kerja 
// berhak mendapatkan kompensasi berupa 50.000 di jam pertama dan 25.000 di jam berikutnya 

// jika dani bekerja dari pukul 8 pagi lalu pulang di pukul 10 malam, 
// berapakah kompensasi yang akan diterima doni

// diketahui
$jamNormal = 8;
$kompensasiSatu = 50000;
$kompensasiDua = 25000;

// ditanya 

$jamMulai = 8;
$jamSelesai = 22;

// jawaban :

$jumlahJam = $jamSelesai - $jamMulai;

if ($jumlahJam > $jamNormal) {
    $jumlahJamKompensasi = $jumlahJam - $jamNormal;

     if ($jumlahJamKompensasi == 1) {
       $kompensasi = $kompensasiSatu;
     } else {
       $kompensasi = (($jumlahJamKompensasi -  1) * $kompensasiDua ) + $kompensasiSatu;
     }

     echo "jumlah kompensasi : " .$kompensasi;
} else {
    echo "tidak mendapat kompensasi "; 
}