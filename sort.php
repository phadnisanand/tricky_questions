<?php
// https://www.ottorask.com/blog/beginner-php-custom-array-sorting
$numbers = [42, 15, 8, 23, 4];

// Sort numbers in ascending order using custom logic
usort($numbers, function ($a, $b) {
    if ($a == $b) {
        return 0;
    }
   // return ($a < $b) ? -1 : 1;
   return  ($a <=> $b);
});

print_r($numbers);
// Output: Array ( [0] => 4, [1] => 8, [2] => 15, [3] => 23, [4] => 42 )
?>
