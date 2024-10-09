<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$total = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}

echo "Total: $total";
?>
