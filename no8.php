<?php
$array1 = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];

$combined_array = array_map('strtoupper', $array1);

$unique_array = array_unique($combined_array);

print_r($unique_array);

?>