<?php

function maxDifferenceManual(array $arr) {
    if (empty($arr)) {
        return 0;
    }

    // Initialize both min and max with the first element
    $minEle = $arr[0];
    $maxEle = $arr[0];

    foreach ($arr as $value) {
        if ($value < $minEle) {
            $minEle = $value;
        }
        if ($value > $maxEle) {
            $maxEle = $value;
        }
    }

    return $maxEle - $minEle;
}

// Example usage:
$array = [10, 3, 5, 20, 11];
echo "Maximum Difference: " . maxDifferenceManual($array); 
// Output: 19 (since 20 - 1 = 19)
