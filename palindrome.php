<?php
function isNumberPalindrome($num) {
    $original = $num;
    $reversed = 0;
    
    while ($num > 0) {
        $digit = $num % 10;
        $reversed = ($reversed * 10) + $digit;
        $num = (int)($num / 10); // Cast to int to handle division remainder
    }
    
    return $original === $reversed;
}

// Examples:
var_dump(isNumberPalindrome(121));  // bool(true)
var_dump(isNumberPalindrome(123));  // bool(false)
