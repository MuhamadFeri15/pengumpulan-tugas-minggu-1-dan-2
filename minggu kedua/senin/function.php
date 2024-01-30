<?php

// function biodata ($nama, $nama2) {
//     echo "halo, $nama";
// };

// biodata("putri", "putra");
// biodata("putri");
// echo "<br>";
// biodata("putra");
// echo "<br>";
// biodata();

$array1 = array("a", "b", "c");
$array2 = array("b", "c", "d");
$result = array_intersect($array1, $array2);
print_r($result);

// $array1 = array("a", "b", "c");
// $array2 = array("b", "c", "d");
// $result = array_unique($array1, $array2);
// print_r($result);

$array1 = array("bakan", "bakan", "gahar");
$result = array_unique($array2);
print_r($result);

