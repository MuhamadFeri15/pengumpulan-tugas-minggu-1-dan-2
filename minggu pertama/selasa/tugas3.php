<?php

// minimarket eko menjual berbagai kebutuhan, setiap pelanggan yang berbelanja lebih dari 100.000 akan 
// mendapatkan voucher potongan harga sebesar 10.000
// jika andi berbelanja sebesar 180.000 apa yang akan didapatkan Andi.
 

$totalBelanjaAndi = 180000;
$batasBelanja = 100000;
$nilaiVoucher = 10000;

if ($totalBelanjaAndi > $batasBelanja) {
    echo "Andi mendapatkan voucher potongan harga sebesar " . $nilaiVoucher . " karena total belanja lebih dari " . $batasBelanja . ".<br>";
    $totalSetelahDiskon = $totalBelanjaAndi - $nilaiVoucher;
    echo " Total yang harus dibayar setelah diskon: " . $totalSetelahDiskon . ".";
} else {
    echo "Andi tidak memenuhi syarat untuk mendapatkan voucher potongan harga.";
    echo " Total yang harus dibayar: " . $totalBelanjaAndi . ".";
}
?>

