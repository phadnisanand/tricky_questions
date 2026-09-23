<?php
function reverseManual($str) {
    $reversed = '';
    $length = strlen($str);
    
    // Start from the last character and move backwards
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    
    return $reversed;
}

echo reverseManual("Anand Phadnis"); 
// Output: !dlrow olleH
