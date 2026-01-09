<?php
// echo "Enter names separated by commas: ";
// $input = readline(); // Get the raw string

// // Convert the string into an array
// $name_array = explode(" ", $input);

// // Clean up whitespace from each entry
// $name_array = array_map('trim', $name_array);

// print_r($name_array);

$size = (int)readline(); // 5 <-- integer input

$arr = new SplFixedArray($size); // finite sized array

// $arr = explode(" ", $arr);

$arr = readline(); // 13305 <-- string input
// $arr_int = explode(" ", $arr); 

// print_r("",$arr_int);

$sum = 0;
for ($i = 0; $i < strlen($arr); $i++) {
    $arr_int = (int)$arr[$i];
    $sum += $arr_int;
}

echo $sum;

?>