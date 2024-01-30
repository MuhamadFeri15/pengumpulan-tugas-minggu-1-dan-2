<?php

// jika hari ini adalah hari senin maka hari ini upacara jika hari ini bukan senin tidak ada upacara


$hariIni = date('l');
$apakahUpacara = ($hariIni == "Monday") ? "upacara" : "tidak upacara";

echo $apakahUpacara;

























