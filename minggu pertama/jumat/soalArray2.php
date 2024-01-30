<?php


// Dari data berikut, tampilkan nama dan dari data tahun tersebut. 
//  tentukan apakah nama tersebut lahir ditahun kabisat atau bukan. Contoh :
//     1. Andi : lahir pada tahun kabisat (2008)
//     2. Beni : lahir bukan pada tahun kabisat (2001)

$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];


foreach ($data as $person) {
    echo $person['nama'] . " : ";
    echo "lahir pada tahun " . $person['tahun'];
    
    if ($person["tahun"] % 4 == 0 ) {
        echo "    (tahun kabisat)";
        echo "<br>";
    } else {
        echo "    (bukan tahun kabisat)";
        echo "<br>";
    }
}
?>





