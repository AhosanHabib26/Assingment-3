<?php
function modifyText($text) {
    // Convert to lowercase
    $text = strtolower($text);
    
    // Replace "brown" with "red"
    $text = str_replace("brown", "red", $text);
    
    // Print the modified text
    echo $text;
}

// Original text
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function with the original text
modifyText($text);
?>
