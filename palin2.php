<?php
function isPalindrome($string) {
    return $string === strrev($string);
}

// Example usage:
var_dump(isPalindrome("racecar")); // bool(true)
var_dump(isPalindrome("hello"));   // bool(false)
