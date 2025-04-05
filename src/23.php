<?php 
    // Generate a random number between 1 and 100
    $randomNum = mt_rand(1, 100);
    
    // Check if the generated number is even or odd
    $isEven = $randomNum % 2 == 0 ? "even" : "odd";
    
    // Print the result to the console
    echo "Random number: $randomNum\nIs the number " . $isEven . "?";
?>
