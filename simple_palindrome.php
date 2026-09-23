<?php
function isPalindrome($input) {
    // Convert to string to safely handle both numbers and strings
    $str = (string)$input; 
    
    // Compare the original string with its reversed version
    return $str === strrev($str);
}

// Testing with a string
var_dump(isPalindrome("racecar")); // Returns: bool(true)
var_dump(isPalindrome("hello"));   // Returns: bool(false)

// Testing with a number
var_dump(isPalindrome(12321));     // Returns: bool(true)
var_dump(isPalindrome(12345));     // Returns: bool(false)
