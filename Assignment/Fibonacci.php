<?php
$n = 10;
$fibonacci = [0, 1];

for ($i = 2; $i < $n; $i++) {
    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

echo implode(", ", $fibonacci);
?>
