<?php
// This PHP script is designed to solve some basic mathematical problems.
// It includes functions for addition and simple arithmetic operations.

function addNumbers($a, $b) {
    return $a + $b;
}

// Example usage:
$sum = addNumbers(5, 3);
echo "The sum of 5 and 3 is: $sum";

function multiplyBy2($number) {
    return $number * 2;
}

// Another example function for multiplying a number by 2
$multiplyBy2Function = multiplyBy2;

// Example usage:
$multipliedNumber = multiplyBy2(4);
echo "The multiplication of 4 by 2 is: $multipliedNumber";
