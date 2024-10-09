<?php
header('Content-type: text/plain');
echo $a = '1'."\n";
echo $b = &$a."\n";
echo $b = "2$b"."\n";

// Explanation:
// $a is initialized as '1'.
// $b is a reference to $a, so both $a and $b point to the same value.
// When $b is set to "2$b", $b becomes "21" and so does $a because $b is a reference to $a.
?>