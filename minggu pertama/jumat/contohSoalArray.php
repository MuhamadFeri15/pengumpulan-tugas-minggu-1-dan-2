<?php

// dari array tersebut hitunglah jumlah rata-rata dari nilai 
// tiap-tiap siswa lalu tampilkan seperti berikut 1. andi : 81.5

$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

echo "<ol>";
foreach ($student as $item) {
    $sum = array_sum($item['nilai']) / count($item['nilai']);

    echo "<li>" . $item['nama'] . " = " . $sum . "</li>";
} 
echo "</ol>";