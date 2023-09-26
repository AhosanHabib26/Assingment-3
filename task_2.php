<?php
function removeEvenNumbers($numbers) {
    // Remove even numbers from the array
    $resultArray = array_filter($numbers, function($num) {
        return $num % 2 != 0;
    });
    
    // Print the resulting array
    print_r($resultArray);
}

// Original array containing numbers from 1 to 10
$numbers = range(1, 10);

// Call the function with the original array
removeEvenNumbers($numbers);
?>
