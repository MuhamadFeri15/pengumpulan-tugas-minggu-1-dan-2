<?php


// presentase kehadiran setiap siswa dalam satu bulan adalah 100%
// - sakit & izin kerkurang 3%
// - alfa berkurang 5%
// - hadir tidak berkurang

$kehadiranSiswa = 100;
$sakit = false; 
$izin = false;
$alfa = false; 

$presentaseKehadiranAndi = $kehadiranSiswa - (($sakit || $izin) ? 3 : ($alfa ? 5 : 0));

echo "Presentase kehadiran siswa: $presentaseKehadiranAndi";
?>
