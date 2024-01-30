<?php





// apabila hasil perhitungan bagi antara angka1 dan angka2 merupakan desimal, 
// maka hasil akan dibulatkan tertampil seperti berikut :
// 10 : 3 = 3,3333333 jika dibulatkan menjadi 3
// apabila hasil perhitungan bukan desimal  :

$angka1 = 10;
$angka2 = 3;

$hasil = $angka1 / $angka2;

echo "Bilangan $angka1 Dibagi $angka2 <br>";

echo "Hasil pembagian: " . $hasil;

if ($hasil == floor($hasil)) {
    echo " (tanpa pembulatan)";
} else {
    $hasil = floor($hasil);
    echo "<br>Hasil pembulatan: " . $hasil;
}
?>