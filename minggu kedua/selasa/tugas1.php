<?php
// buatlah sebuah fungsi yang akan menghasilkan sebuah array dari banyak data 
// yang diterima. data yang dikirim berbentuk string nama-nama jurusan. jika
// nama jurusan ada yang dipanggil duplikat, maka yang dimasukkan ke array hanya
// salah satunya saja (capslock)
// contoh pemanggilan argument nya : namaFunction("pplg", "PPLG", "KLN", "PMN", "HTL").
// maka akan menghasilkan array ["PPLG", "KLN", "PMN", "HTL"]

function createArray(...$jurusan) {
   
    $jurusanKapital = array_map('strtoupper', $jurusan);
    $mencariYangSama = array_unique($jurusanKapital);
    
    foreach ( $mencariYangSama as $value) {
       echo $value . "\n";
    }

}

print_r (createArray("PPLG", "KLN", "PMN", "HTL", "pplg", "htl"));

?>



