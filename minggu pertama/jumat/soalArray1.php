<?php

// Dari bilangan berikut, kelompokan nilai-nilai tersebut menjadi kelompok kompeten 
// ( lebih dari atau sama dengan 75) dan belum kompeten (selain dari itu). 
// Lalu tampilkan berdasarkan kelompok tersebut.


$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];


$kompeten = [];
$belumKompeten = [];


foreach ($bilangan as $value) {
    
    if ($value >= 75) {
        $kompeten[] = $value;
    } else {
        $belumKompeten[] = $value;
    }
}


echo "Nilai Kelompok Kompeten: ";
foreach ($kompeten as $nilaiKompeten) {
    echo $nilaiKompeten . ' ';
}

echo "\n";
echo "<br>";

echo "Nilai Kelompok Belum Kompeten: ";
foreach ($belumKompeten as $nilaiBelumKompeten) {
    echo $nilaiBelumKompeten . ' ';
}


?>




