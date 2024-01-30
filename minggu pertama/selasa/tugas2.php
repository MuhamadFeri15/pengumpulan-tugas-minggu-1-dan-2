<?php

// syarat untuk mendaftar dengan syarat berikut :
// nilai minimum mata pelajaran berikut :
// Matematika 87
// bahasa inggris 85
// bahasa indonesia 87
// dengan minimum rata-rata nilai adalah 85
// jika nilai minimum mata pelajaran dan minimum rata-rata terpenuhi maka peserta dinyatakan diterima

 
$minimumMatematika = 87;
$minimumInggris = 85;
$minimumIndonesia = 87;
$minimumRata = 85;


$matematikaAndi = 75;
$inggrisAndi = 65;
$indonesiaAndi = 55;
$minimumAndi = ($matematikaAndi * $inggrisAndi * $indonesiaAndi) / 3;

if ( $matematikaAndi == $minimumMatematika && 
    $inggrisAndi == $minimumInggris &&
     $indonesiaAndi == $minimumIndonesia &&
     $minimumAndi == $minimumRata) {
    echo "diterima";
} else {
    echo "tidak diterima";
}

























































// $nilaiMatematika = 87;
// $nilaiBahasaInggris = 85;
// $nilaiBahasaIndonesia = 87;

// $rataRata = ($nilaiMatematika + $nilaiBahasaInggris + $nilaiBahasaIndonesia) / 3;

// $nilaiMinimumMatematika = 87;
// $nilaiMinimumBahasaInggris = 85;
// $nilaiMinimumBahasaIndonesia = 87;
// $rataRataMinimum = 85;

// if ($nilaiMatematika >= $nilaiMinimumMatematika &&
//     $nilaiBahasaInggris >= $nilaiMinimumBahasaInggris &&
//     $nilaiBahasaIndonesia >= $nilaiMinimumBahasaIndonesia &&
//     $rataRata >= $rataRataMinimum) {
//     echo "Peserta diterima!";
// } else {
//     echo "Maaf, peserta tidak memenuhi syarat.";
// }
















