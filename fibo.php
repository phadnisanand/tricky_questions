<?php
/*$sum =0;
$arr = array(1,3,3,4);
foreach($arr as $key=> $value) {
	$sum += $value;
}
echo $sum;*/


function printFibonacci($n) {
    if ($n <= 0) return;
    
    $first = 0;
    $second = 1;
    
    // Print the first number
    echo $first;
    
    if ($n > 1) {
        // Print the second number
        echo ", " . $second;
    }
    
    // Calculate and print the remaining numbers
    for ($i = 2; $i < $n; $i++) {
        $next = $first + $second;
        echo ", " . $next;
        
        // Update variables for the next iteration
        $first = $second;
        $second = $next;
    }
}

// Generate the first 10 numbers
printFibonacci(10); 
// Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
?>
