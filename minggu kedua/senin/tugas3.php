<?php

// buatlah sebuah fungsi  yang akan membandingkan dua buah string nama
// lalu menampilkan jumlah karakter dari dua nama tersebut dan menampilkan nama yang memiliki jumlah karakter lebih banyak
// selisih nya


function pembandingNama($nama1, $nama2) {
    $hitung1 = strlen($nama1);
    $hitung2 = strlen($nama2);

    echo "Jumlah karakter nama $nama1: $hitung1" ."\n";
    echo "Jumlah karakter nama $nama2: $hitung2" . "\n";

    if ($hitung1 > $hitung2) {
        $namaLebihBanyak = $nama1;
        $selisih = $hitung1 - $hitung2;
    } elseif ($hitung2 > $hitung1) {
        $namaLebihBanyak = $nama2;
        $selisih = $hitung2 - $hitung1;
    } else {
        $namaLebihBanyak = null;
        $selisih = 0;
    }

   
    if ($namaLebihBanyak !== null) {
        echo "Nama yang memiliki jumlah karakter lebih banyak: $namaLebihBanyak" . "\n";
        echo "Selisih jumlah karakter: $selisih.\n";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.\n";
    }
}

$nama1 = "fema flamelina putri";
$nama2 = "artasya legina";
pembandingNama($nama1, $nama2);



// function pembandingNama($nama1, $nama2) {
  
//     $hitung = strlen($nama1);
//      $hitung2 = strlen($nama2);

//      $selisih = $hitung - $hitung2;

//      $banyakNama = max($hitung, $hitung2);

//      return [$selisih, $banyakNama];
    

// }

// $nama1 = "feri";
// $nama2 = "gara";
// [$banyakNama, $selisih] = pembandingNama($nama1, $nama2);
// echo "yang paling banyak adalah $banyakNama dan Selisih panjang antara '$nama1' dan '$nama2' adalah $selisih.";
