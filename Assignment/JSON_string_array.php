<?php
// Indexed array
$array1 = array(1, 2, 3);

// Associative array
$array2 = array("name" => "Zainab", "age" => 21);

// Multidimensional array
$array3 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);


$json = '{"name": "Zainab", "age": 21, "city": "Ahmedabad"}';
$array = json_decode($json, true);
print_r($array);





/* Output the arrays
//echo "Indexed Array:\n";
print_r($array1);

echo "\nAssociative Array:\n";
print_r($array2);

echo "\nMultidimensional Array:\n";
print_r($array3);
*/
?>