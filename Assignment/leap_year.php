<?php
header('Content-type: text/plain');
for ($year = 1901; $year <= 2016; $year++) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a Leap Year\n";
    }
}
?>
