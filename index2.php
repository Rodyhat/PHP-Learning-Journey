<?php
// Array is a data type that stores multiple value in a single variable
// array() is uaed to create an array and using the square bracket []

// index array
$colors = array("yellow", "white", "blue", "pink");
print_r($colors);
echo "<br>";
echo $colors[0];
echo "<br>";

echo $colors[1];
echo "<br>";

echo $colors[2];
echo "<br>";

echo $colors[3];
echo "<br>";

$food = ['rice', "beans", "yam"];
print_r($food);
echo "<br>";

echo count($food);


// three types of array
// index array, associative array, multidimensional array

// associative array are array that contain the key and value
$details = array(
    'name' => "Rodiat",
    "food" => "Beans and plantain",
    "age" => 30
);
print_r($details);
echo "<br>";

echo $details['name'];
echo "<br>";

print_r($details['name']);
echo "<br>";

echo $details['food'];
echo "<br>";

print_r($details['food']);
echo "<br>";

print_r($details['age']);
echo "<br>";

echo ($details['age']);
echo "<br>";

// multidimensional array - contain array inside another array
$details2 = array(
    array("rice", "beans"),
    array("amala", "yam"),
    array(30, 20)
);
echo $details2[0][1];
echo "<br>";

echo $details2[0][1];
echo "<br>";

echo $details2[2][1];
echo "<br>";

$details3 = [
    ["rice", "beans"],
    [20, 30],
    [30.4, 40.2]
];

echo $details3[2][1];
echo "<br>";

// using the define function
define('details5', ['rice', 'plantain', 'noodles']);
print_r(details5);
echo "<br>";

echo details5[2];
echo "<br>";

// using the const keyword
const details6 = ['pasta', 'shawama'];
print_r(details6);
echo "<br>";

echo details6[1];
?>
