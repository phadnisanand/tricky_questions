<?php
function isPalindromeNumber($num) {
    $original = $num;
    $reversed = 0;
    
    while ($num > 0) {
        $digit = $num % 10;             // Get the last digit
        $reversed = ($reversed * 10) + $digit; // Append it to the reversed number
        $num = floor($num / 10);        // Remove the last digit
    }
    
    return $original === $reversed;
}

// Test cases
$number = 12326;
if (isPalindromeNumber($number)) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}
// Output: 12321 is a palindrome.
?>