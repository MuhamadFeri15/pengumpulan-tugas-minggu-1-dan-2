<?php

// buatlah sebuah fungsi yang akan menghitung lembar uang 
// rupiah 
// contoh : 140500
// lembar rupiah :
// - Rp 100.000 : 1
// - Rp 20.000 : 2
// - Rp 500 : 1

function Rupiah($number) {
    $uang = [ 100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 50];

   
    $lembar_uang = [];

    
    foreach ($uang as $nilai) {
        
        $lembar = floor($number / $nilai);
       
        if ($lembar > 0) {
            $lembar_uang["$nilai"] = $lembar;
            $number = $number - $lembar * $nilai;
        }
    }

    echo "Lembar uang rupiah:";
    echo "<br>";
    foreach ($lembar_uang as $pecahanUang => $lembar) {
        echo "<li>Rp " . number_format($pecahanUang) . " : " . $lembar ."</li>";
        
    }
   
}

Rupiah(345000);




// function hitungLembarRupiah($jumlahUang) {
//     $nilaiUang = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 50];

//     $lembarUang = array_fill(0, count($nilaiUang), 0);

//     foreach ($nilaiUang as $index => $nilai) {
//         if ($jumlahUang >= $nilai) {
//             $lembarUang[$index] = floor($jumlahUang / $nilai);
//             $jumlahUang %= $nilai;
//         }
//     }
    
//     echo "Lembar Rupiah :\n";
//     for ($i = 0; $i < count($nilaiUang); $i++) {
//         if ($lembarUang[$i] > 0) {
//             echo "<li> Rp " . number_format($nilaiUang[$i]) . " : " . $lembarUang[$i] . "</li>";
//         }
//     }
// }

// $jumlahUang = 140500;
// hitungLembarRupiah($jumlahUang);





