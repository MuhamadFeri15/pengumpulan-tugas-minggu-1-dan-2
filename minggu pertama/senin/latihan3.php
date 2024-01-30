<?php

$var = 2024;
// seperti yang diketahui untuk tahun-tahun yang merupakan kelipatan 4, pada bulan februarinya terdapat tanggal 29
// buatlah pengkodisian jika tahun merupakan kelipatan 4, maka akan menampilkan :
// tahun 2024, bulan februari sampai tanggal 29
// selain dari itu , akan menampilkan :
// tahun 2023, bulan februari sampai dengan tanggal 28


if ($var % 4 == 0) {
    echo "Tahun $var, bulan Februari sampai dengan tanggal 29";
} else {
    echo "Tahun $var, bulan Februari sampai dengan tanggal 28";
}
?>


