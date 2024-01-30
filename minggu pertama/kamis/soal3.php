<?php

// nasi goreng : 15000
// ayam bakar : 20000
// nasi kebuli : 25000
// aneka jus : 8000
// es teh manis : 3000
// es jeruk : 5000

// rumah makan beni mengadakan program jumat berkah dengan memberikan diskon sebesar
// 5% di hari jumat dan 2% di hari senin. hitunglah harga yang dibayar jika dani ingin membeli 2 nasi kebuli, 1 ayam bakar
// 2 nasi goreng  (gunakan hari secara otomatis dari hari ini)


$nasigoreng = 15000;
$ayambakar = 20000;
$nasikebuli = 25000;
$anekajus = 8000;
$estehmanis = 3000;
$esjeruk = 5000;

$dani = ($nasikebuli *2) + $ayambakar + ($nasigoreng * 2);
$hariPembelian = "senin";
$diskonHariJumat  = 0.05; 
$diskonHariSenin = 0.02;
  

if ($hariPembelian = "senin") {
    $PembelianDaniHariSenin = $dani - ($dani * $diskonHariSenin) ;
    echo $PembelianDaniHariSenin;
} elseif ($hariPembelian = "jumat") {
    $pembelianhariJumat = $dani - ( $dani * $diskonHariJumat);
    echo $pembelianhariJumat;
} else {
    echo "tidak ada diskon";
}
     
     