<?php

// setiap orang memiliki imt dan kategori imt nya masing-masing 
// berikut kategori imt nya :
// kurang dari 18.5 : berat badan kurang
// dari 18.5 sampai kurang dari 22.9 : normal
// dari 22.9 sampai kurang dari 24.9 : berat badan lebih
// lebih dari dan sama dengan 25 : obesitas

// jika beni memiliki berat badan 44kg dengan tinggi badan 148cm,termasuk kedalam kategori apakah beni


 $beratbeni = 70;
 $tinggibeni = 178;

 $imtbeni = $beratbeni / ($tinggibeni / 100) **2;
 

 if ($imtbeni <= 18.5 ) {
    echo " imt beni adalah $imtbeni dan berat badan beni kurang";
} elseif ($imtbeni > 18.5 && $imtbeni <= 22.9) {
   echo " imt beni adalah $imtbeni dan berat badan beni normal";
} elseif ($imtbeni > 22.9 && $imtbeni <= 24.9) {
    echo "imt beni adalah $imtbeni dan berat badan beni lebih gendut tapi nggak obesitas";
} else {
    echo "obesitas";
}


// if () {
//     echo ;
// } elseif () {
//     echo ; 
// } elseif () {
//     echo ;
// } else {
//     echo;
// }