<?php
//  operators
// Arithmetic operator, Assignment operator, Logical operator, comparison operator

// Arithmetic operator : +,-,*,/
$num1 = 5;
$num2 = 2;

echo $num1 + $num2;
echo $num1 - $num2;
echo $num1 * $num2;
echo $num1 / $num2;

// Assignment operator : =,==,+=,-=,/=,*=
$num2 += $num1; // $num2 = $num2 + $num1
$num2 -= $num1; // $num2 = $num2 - $num1
$num2 *= $num1; // $num2 = $num2 * $num1
$num2 /= $num1; // $num2 = $num2 / $num1


// logical operator : && , ||

// comparison operator = >,<,>=,<=
var_dump($num1 > $num2);
var_dump($num1 < $num2);
var_dump($num1 >= $num2);
var_dump($num1 <= $num2);
var_dump($num2 != $num1);
var_dump($num2 === $num1);

?>
