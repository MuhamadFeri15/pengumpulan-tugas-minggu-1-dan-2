<?php

$array = array (1, 2, 3,
                4, 5, 6, 
                7, 8, 9);

var_dump($array);
echo "<br>";
print_r($array);
echo "<br>";

// kalau panggil item arr pake echo, harus ada di dalam loop

for ($i=0; $i < count($array) ; $i++) { 
    echo $array[$i];
}

echo "<br>";

foreach ($array as $key => $value) {
    echo $value;
}














