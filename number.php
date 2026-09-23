<?php
$text = "apple";

// Mode 1 returns an associative array: [ASCII_value => frequency]
$result = count_chars($text, 1); 

foreach ($result as $ascii_value => $frequency) {
    echo chr($ascii_value) . " appears " . $frequency . " time(s)\n";
}

/* 
Output:
a appears 1 time(s)
p appears 2 time(s)
l appears 1 time(s)
e appears 1 time(s)
*/
?>
