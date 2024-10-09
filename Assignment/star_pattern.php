<?php
header('Content-type: text/plain');
// Function to print the pattern
function printPattern() {
    // Loop for each row
    for ($i = 1; $i <= 5; $i++) {
        // If it is the first or last row, print 5 stars
        if ($i == 1 || $i == 5) {
            echo "*****\n";  // print 5 stars
        } else {
            // For other rows, print a single star
            echo "*\n"; // print 1 star
        }
    }
}

// Call the function to print the pattern
printPattern();
?>
