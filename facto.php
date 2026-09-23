<?php
function getFactorialRecursive($number) {
    if ($number < 0) {
        return "Invalid input.";
    }
    
    // Base case: 0! and 1! are both 1
    if ($number <= 1) {
        return 1;
    }
    
    // Recursive call
    return $number * getFactorialRecursive($number - 1);  // 6*5*4*3*2*1
}

// Example usage:
$num = 6;
echo "The factorial of $num is " . getFactorialRecursive($num); 
// Output: The factorial of 6 is 720  6*5*4*3*2*1
?>
