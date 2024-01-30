<?php

// waktu tidur yang baik untuk anak-anak usia 6-12 adalah 10 jam. 
// untuk usia 12-18 tahun = 8-9 jam. untuk usia 18-40 = 7-8 jam. 
// apabila seseorang berusia 17 tahun berapa waktu tidur yang baik

$seseorang = 17;


if ($seseorang >= 6 && $seseorang <= 12) {
    echo "waktu tidur seseorang dengan usia $seseorang harus tidur selama 10 jam";
} elseif ($seseorang > 12 && $seseorang <= 18) {
   echo "waktu tidur seseorang dengan usia $seseorang harus tidur antara 8-9 jam";
} elseif ($seseorang > 18 && $seseorang <= 40) {
    echo "waktu tidur seseorang dengan usia $seseorang harus tidur antara 7-8 jam";
} else {
    echo "tidur selama 1 abad ku tak peduli";
};
