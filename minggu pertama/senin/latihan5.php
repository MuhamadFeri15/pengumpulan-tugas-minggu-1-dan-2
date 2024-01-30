<?php

$tahun_lahir = 2007;
$tahun_sekarang = 2024;

$selisih_tahun = $tahun_sekarang - $tahun_lahir;

if ($selisih_tahun >= 17) {
    echo "Tahun kelahiran $tahun_lahir sudah memiliki KTP. Usia sekarang = $selisih_tahun";
} else {
    echo "Tahun kelahiran $tahun_lahir belum memiliki KTP. Usia sekarang = $selisih_tahun";
}

?>