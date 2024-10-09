<?php
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$randomValue = $array[array_rand($array)];
echo $randomValue;
?>
