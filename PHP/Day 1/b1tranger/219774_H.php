<?php
echo "Enter names separated by commas: ";
$input = readline(); // Get the raw string

// Convert the string into an array
$name_array = explode(",", $input);

// Clean up whitespace from each entry
$name_array = array_map('trim', $name_array);

print_r($name_array[0]);
?>