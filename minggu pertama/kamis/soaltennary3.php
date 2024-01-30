<?php

// predikat terhadap hasil ujian diberikan ketika
// - mendapatkan predikat a jika nilai lebih dari 90
// - mendapatkan predikat b jika nilai lebih dari 75
// - mendapat predikat jika nilai <70;



$nilai = 65;
$predikat = ($nilai >= 90) ? 'a' : (($nilai >= 75) ? 'b' : 'c');
echo "Predikat: $predikat";







