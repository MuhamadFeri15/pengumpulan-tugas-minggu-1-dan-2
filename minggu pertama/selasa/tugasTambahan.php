<?php

// rumah makan beni mengadakan program diskon sebesar 5% tiap pembelian hari selasa.
// dan setiap pembelian diatas 100.000 mendapat diskon sebesar 7%

// hitunglah uang yang harus dibayar jika total pembelian 130.000 dihari ini

// diketahui

$hariPembelian = "Selasa";
$totalPembelian = 130000;
$diskonHariSelasa = 0.05; 
$diskonBesar = 0.07 ; 

if ($hariPembelian == "Selasa") {
   
    $totalPembelian = $totalPembelian - ( $totalPembelian * $diskonHariSelasa);

    if ($totalPembelian > 100000) {
        $totalPembelian = $totalPembelian - ( $totalPembelian * $diskonBesar);
    }
}

echo $totalPembelian;


?>




