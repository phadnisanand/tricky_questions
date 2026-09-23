<?php
// An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.
function countDigits($num) {
    return strlen((string)$num);
}

// Function to check if a number is an Armstrong number
function isArmstrong($num) {
    $k = countDigits($num); 
    $sum = 0; 
    $originalNum = $num;
    
    while ($num > 0) {
        $ld = $num % 10; 
        $sum += pow($ld, $k); 
        $num = (int)($num / 10); 
    }
    
    return $sum == $originalNum;
}

// Test with different numbers
$numbers = [153, 9474, 123, 371];

foreach ($numbers as $number) {
    if (isArmstrong($number)) {
        echo "$number is an Armstrong number.<br>";
    } else {
        echo "$number is not an Armstrong number.<br>";
    }
}
?>
