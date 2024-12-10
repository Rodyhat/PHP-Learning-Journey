<?php
// control structures
// conditional statement are used to perform different acitons based on different conditions
// if statement, if elseif statement, if else statement

// if statemnt = execute some code if one condition is true
$age = 34;
if ($age >= 30) {
    echo "You are eligible to vote";
}
echo "<br>";

// if else statement = execute some code if a conditon is true and another code if a condition is false
$time = date('H');
if ($time < 12) {
    echo "Have a good day";
} else {
    echo "Go and sleep";
}
echo "<br>";
-
// if elseif else statement = execute different code for more than two conditions
$grade = 36;
if ($grade >= 70 && $grade <= 100) {
    echo "A";
} elseif ($grade >= 60 && $grade <= 69) {
    echo "B";
} elseif ($grade >= 50 && $grade <= 59) {
    echo "C";
} elseif ($grade >= 45 && $grade <= 49) {
    echo "D";
} elseif ($grade >= 40 && $grade <= 44) {
    echo "E";
} elseif ($grade >= 0 && $grade <= 39) {
    echo "F";
} else {
    echo "You failed wolefully";
}
echo "<br>";


$traffic = "red";
switch ($traffic) {
    case 'red':
        echo "Your favourite color is red";
        break;
    case 'yellow':
        echo "Your favourite color is yellow";
        break;
    case 'blue':
        echo "Your favourite color is blue";
        break;
    default:
        echo "You do not have a traffic light";
        break;
};
echo "<br>";


?>
