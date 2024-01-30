<?php

// buatlah function yang akan menampilakan hari tanggal dengan format senin, (22 januari 2024) hari menggunakan
// menggunakan bahasa indonesia, argument diambil dari variabel berikut

$date = date('D, d M Y');

function formatIDN($date) {
    $hariIndonesia = array(
        'Sun' => 'Minggu',
        'Mon' => 'Senin',
        'Tue' => 'Selasa',
        'Wed' => 'Rabu',
        'Thu' => 'Kamis',
        'Fri' => 'Jumat',
        'Sat' => 'Sabtu'
    );

    $merubahTanggal = date('D, d M Y', strtotime($date));
    $merubahTanggal = strtr($merubahTanggal, $hariIndonesia);
    return $merubahTanggal;
    
}

$merubahTanggal = formatIDN($date);
echo $date;
echo " vs ";
echo $merubahTanggal;

