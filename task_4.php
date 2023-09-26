<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $totalSubjects = count($grades);
        $totalGrade = array_sum($grades);
        $averageGrade = $totalGrade / $totalSubjects;
        
        echo "Average grade for $student: $averageGrade\n";
    }
}

// Multidimensional array containing student grades
$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 90, 'Science' => 88),
    'Student2' => array('Math' => 78, 'English' => 92, 'Science' => 86),
    'Student3' => array('Math' => 90, 'English' => 85, 'Science' => 91)
);

// Call the function with the student grades
calculateAverageGrades($studentGrades);
?>
