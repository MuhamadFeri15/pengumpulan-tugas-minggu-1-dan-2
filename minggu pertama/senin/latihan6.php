<?php

//  terdapat satu variable yang memiliki value -5, tentukanlah apakah variable tersebut
// kedalam bilangan bulat positif , bilangan bulat negatif atau bilangan cacah
// dan apakah variable tersebut kelipatan 3 

// operator ada 
// operator aritmatika
// operator assignment
// operator pembanding / perbandingan 
// operator concate
// untuk menggabungkan string dengan variable


// ciri tipe data boolean 
// 1 - 0 atau true or false 

$angka = -5;

if ($angka > 0) {
    echo "variabel $angka ini bilangan bulat positif<br>";
}else if ($angka < 0) {
    echo "variable $angka ini bilangan bulat negatif<br>";
}else {
    echo "variable $angka ini bilaangan cacah<br>";
};


if ($angka % 3 == 0) {
    echo " variable $angka ini kelipatan 3";
} else {
    echo " variable $angka ini bukan kelipatan 3";
}


