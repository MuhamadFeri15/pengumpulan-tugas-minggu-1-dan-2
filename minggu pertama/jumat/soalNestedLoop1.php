<?php

// buatlah looping yang menghasilkan output * (bintang)
// dengan berisi 2 konten 4 baris dan 8 kolom
// mengggunakan nested if 

// konten : loop pertama jumlah konten
// baris  : loop kedua ambil dari baris per konton
// kolom  : loop ketiga ambil dari jumlah kolom di per konten


for ($k=1; $k <= 2 ; $k++) { 
    echo "<br>";
    for ($i=1; $i <= 4; $i++ ) { 
        for ($f=1; $f <= 8; $f++) { 
            echo " * " ;
        }
        echo " <br> "; 
    }
}


// $matrix = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9]
// ];


// $rows = count($matrix);
// $cols = count($matrix[0]);

// for ($i = 0; $i < $rows; $i++) {
//     for ($j = 0; $j < $cols; $j++) {
//         $matrix[$i][$j] = '*';
//     }
// }

// for ($i = 0; $i < $rows; $i++) {
//     for ($j = 0; $j < $cols; $j++) {
//         echo $matrix[$i][$j] . ' ';
//     }
//     echo "\n";
// }
 
