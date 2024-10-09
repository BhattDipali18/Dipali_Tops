<?php
$a = 5;
$b = 10;
$c = 8;

$largest = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);
echo "The largest number is: $largest";
?>
