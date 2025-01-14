<?php
$numbers = array(11,12,34,54);
// sort in an array = it sort an array in ascending order
sort($numbers);
print_r($numbers);
echo "<br>";

// rsort in an array = it sort an array in descending order
rsort($numbers);
print_r($numbers);
echo "<br>";

$num1 = array("Rodiat", "Sofiat", 23 ,34.5);
rsort($num1);
print_r($num1);
echo "<br>";

$details = array(
    "name" => "Kemisola",
    'age' => 30,
    'food' => 'Beans and plantain',
    'school' => "LAUTECH"
);

// asort - it sort an associative array in ascending order according to the value
asort($details);
print_r($details);
echo "<br>";

// ksort = it sort an associative array in ascending order according to the key
ksort($details);
print_r($details);
echo "<br>";

// arsort = it sort an associative array in descending order according to their value
arsort($details);
print_r($details);
echo "<br>";

// krsort = it sort an associative array in descending order according to their key
ksort($details);
print_r($details);
echo "<br>";

// array functions
$colors = array("yellow", "red", "blue", "black", "green");
// array_push() = it takes two parameters , the name of the variable and the item you want to push to the array = it insert one or more element to the end of an array
array_push($colors, 'white');
print_r($colors);
echo "<br>";

// array_pop = it delete the last element in an array
array_pop($colors);
print_r($colors);
echo "<br>";

// array_search() is a built-in function used to search for a specific value in an array
array_search('red', $colors);
echo "<br>";

// count = it returns the number of element in an array
count($colors);
print_r($colors);
echo "<br>";

// to print the key of an associative array
$key = array_keys($gradebook);
print_r($key);
echo "<br>";

// ARRAY CHALLENGE
// Manage a Student Gradebook 
$gradebook = [
    "John" => 85,
    "Jane" => 90,
    "Doe" => 78
];

echo "Students grade:";
echo "<br>";

// to print the key of an associative array
$key = array_keys($gradebook);
print_r($key);
echo "<br>";

echo $gradebook['John'];
echo "<br>";
echo $gradebook['Jane'];
echo "<br>";
echo $gradebook['Doe'];
?>