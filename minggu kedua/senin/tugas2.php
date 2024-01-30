<?php

// buatlah sebuah fungsi yang akan mengubah sebuah number menjadi format k untuk ribuan dan m untuk jutaan
// misal 9500 menjadi 9,5 k dan 1.700.000 menjadi 1,7 m 

//sendiri 
function formatNumber($number) {
      
    if ($number < 1000) {
        return $number;
    }

    $ubahUang = array( "H", "K", "M", "B", "T");
    for ($i=0; $number >= 1000 && $i < count($ubahUang) - 1; $i++) { 
      $number = $number / 1000;
      echo "\n";
    }
    
    return number_format($number, ($i == 1 ? 2 : 0)) . $ubahUang[$i];
}

$uang1 = 1500;
$uang2 = 2000000;

echo formatNumber($uang1); 
echo formatNumber($uang2); 

// if-else

// function formatNumber($number) {
//     if($number == 0) {
//         $short = 'No data';
//     } elseif($number < 1000000) {
//         $short = round($number/1000, 1).'K';
//     } elseif($number < 1000000000) {
//         $short =  round($number/1000000, 1).'M';
//     }
//    return $short;

//    }

// echo formatNumber(9500);
// echo "<br>";
// echo formatNumber(1700000);





?>
 