<?php

// dani ingin membangu rumah disuatu kompleks dengan panjang tanah 13 meter dan lebar tanah 9 meter
// tetapi sebelum sebelum membangun rumah deni harus memberikan laporan terlebih dahulu tipe rumah yang ingin dia buat kepada
// kontraktor bangunan dengan luas tanah yang dia punya, masuk ke kategori manakah rumah dani nantinya 

// tipe 36 : <90 m2
// tipe 45 : 90 - 96 m2
// tipe 54 : 96 - 120 m2
// tipe 60 : 120 - 150 m2
// tipe 70 : >150 m2

$panjangRumahDani = 13;
$lebarRumahDani = 9;

$luasRumahDani = $panjangRumahDani * $lebarRumahDani;

if ($luasRumahDani <= 90 ) {
    echo "Rumah dani masuk tipe 36";
} elseif ($luasRumahDani > 90 && $luasRumahDani <= 96) {
   echo "Rumah dani masuk tipe 45";
} elseif ($luasRumahDani > 96 && $luasRumahDani <= 120) {
    echo "Rumah dani masuk tipe 54";
} elseif ( $luasRumahDani > 120 && $luasRumahDani <= 150){
    echo "Rumah dani masuk tipe 60";
} else {
    echo "Rumah dani masuk tipe 70";
}


