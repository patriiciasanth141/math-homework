<?php
// Example PHP code for Math Homework 2.17

function calculateSquareRoot($number) {
    if ($number < 0) {
        throw new Exception("Number must be non-negative.");
    }
    
    $sqrt = sqrt($number);
    return $sqrt;
}

try {
    echo "The square root of {$number} is: " . calculateSquareRoot($number) . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
