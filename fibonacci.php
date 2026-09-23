<?php
function printFibonacciSeries($terms) {
    $num1 = 0;
    $num2 = 1;

    echo "Fibonacci Series: ";

    for ($i = 0; $i < $terms; $i++) {
        echo $num1 . " ";

        // Calculate the next number and swap values
        $next = $num1 + $num2;
        $num1 = $num2;
        $num2 = $next;
    }
}

// Generate the first 10 numbers
printFibonacciSeries(10);
?>
