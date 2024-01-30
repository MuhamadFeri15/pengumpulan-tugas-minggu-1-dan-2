<?php

// gabungkan dua array tersebut, lalu untuk nilai yang sama 
// maka akan diambil hanya salah satunya saja, 
// setelah itu tampilkan bilangan secara terurut dari terbesar ke terkecil. 
// Hasil akan berisi angka-angka berikut :


$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];


$gabungan = array_merge($bil1, $bil2);


$tidakSama = [];
foreach ($gabungan as $value) {
    if ([$value, $tidakSama]) {
        $tidakSama [] = $value;
    }
}


$count = count($tidakSama);
for ($i = 0; $i < $count - 1; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($tidakSama[$i] < $tidakSama[$j]) {
            $temp = $tidakSama[$i];
            $tidakSama[$i] = $tidakSama[$j];
            $tidakSama[$j] = $temp;
        }
    }
}

// Tampilkan hasil
echo "Hasil setelah menggabungkan, menghapus nilai duplikat, dan mengurutkan secara terbalik:". "<br>";
print_r ($tidakSama);
?>

