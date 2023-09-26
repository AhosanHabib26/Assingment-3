<?php
function sortGradesDescending($grades) {
    // Sort grades in descending order
    rsort($grades);
    
    // Print the sorted grades
    print_r($grades);
}

// Original array containing grades
$grades = [85, 92, 78, 88, 95];

// Call the function with the original array
sortGradesDescending($grades);
?>
