<?php
// // // loop = are used to execute the same block of code again and again as long as a certain condition is true
// // // for loop, while loop, do-while loop and foreach loop

// // // for loop it loops through a block of code a specified number of times
// // // initialization, condition and increment
// // for ($i = 0; $i < 5; $i++) {
// //     echo "Welcome to php class <br>";
// // };

// // for ($i = 0; $i <= 50; $i += 10) {
// //     echo $i . "<br>";
// // }

// // // multiplication table of five to ten
// // for ($i = 5; $i <= 10; $i++) {
// //     echo "<br>";
// //     for ($j = 1; $j <= 12; $j++) {
// //         echo "<br>";
// //         echo "$i x $j = " . $i * $j;
// //     }
// // }

// // // using a for loop to iterate through a number from 1 to 9, in each iteration print the current number n repeatedly n times on the same line
// // for ($m = 1; $m <= 9; $m++) {
// //     echo "<br>";
// //     if ($m == $m) {
// //         echo str_repeat($m, $m);
// //     }
// // }
// // echo "<br>";

// // // how to calculate the sum of all even numbers from 1 to 10
// // $sum = 0;
// // for ($i = 1; $i <= 10; $i++) {
// //     if ($i % 2 == 0) {
// //         $result = $sum += $i;
// //     }
// // }
// // echo "The sum of all even numbers from 1 to 10 is " . $result;
// // echo "<br>";

// // // foreach loop = it loops through a block of code for each element in an array or each property in an object
// // $colors = array("red", "purple", "green", "yellow");
// // foreach ($colors as $color) {
// //     echo $color . "<br>";
// // }
// // echo "<br>";

// // // associative array
// // $food = array(
// //     "food1" => "rice",
// //     "food2" => "beans"
// // );
// // foreach ($food as $key => $value) {
// //     echo "key => $key and value => $value <br>";
// // }
// // echo "<br>";

// // // // how to calculate the sum of all even numbers from 1 to 10
// // $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// // $sum = 0;
// // foreach ($numbers as $number) {
// //     if ($number % 2 == 0) {
// //         $result = $sum += $number;
// //     }
// // }
// // echo "The sum of all array even numbers between 1 to 10 is " . $result;
// // echo "<br>";

// // // while loop = it loops through a block of code as long as a specified condition is true
// // $a  = 1;
// // while ($a <= 10) {
// //     echo "<br>";
// //     echo $a;
// //     $a++;
// // }
// // echo "<br>";
// // // // how to calculate the sum of all even numbers from 1 to 10
// // $w = 1;
// // $sum = 0;
// // while ($w <= 5) {
// //     if ($w % 2 == 0) {
// //         $result = $sum += $w;
// //     }
// //     $w++;
// // }
// // echo "The sum of all even number between 1 to 10 is  " . $result;
// // echo "<br>";

// // // factorial of a number
// // $num2 = 4;
// // $factorial = 1;
// // while ($num2 > 0) {
// //     $result = $factorial *= $num2;
// //     $num2--;
// // }
// // echo "The factorial of 4 is " . $result;
// // echo "<br>";


// // // do-while loop = it loops through a block of code once then repeat the loop as long as the specified condition is true
// // $i = 1;
// // do {
// //     echo $i . "<br>";
// //     $i++;
// // } while ($i <= 10);

// // // // how to calculate the sum of all even numbers from 1 to 10
// // $i = 1;
// // $sum = 0;
// // do {
// //     if ($i % 2 == 0) {
// //         $result =  $sum += $i;
// //     }
// //     $i++;
// // } while ($i <= 10);
// // echo "The sum of all even numbers from 1 to 10 is " . $result;
// // echo "<br>";

// // $i = 3;
// // $factorial = 1;
// // while ($i > 0) {
// //     $result = $factorial *= $i;
// //     $i--;
// // }
// // echo $result;
// // echo "<br>";

// // $i = 1;
// // $sum = 0;
// // do {
// //     if($i % 2 == 0){
// //         $result = $sum += $i;
// //     }
// //     $i++;
// // } while ($i <= 10);

// // echo $result;

// for ($i=0; $i < 5; $i++) { 
//     echo "WELCOME TO PHP PROGRAMMING CLASS <br>";
// }
// for ($i=0; $i <= 20; $i+=10) { 
//     echo $i . "<br>";
// }
// for ($i= 5; $i <= 10 ; $i++) { 
//     echo "<br>";
//     for ($j = 1; $j < 12 ; $j++) { 
//         echo "<br>";
//         echo " $i x $j = " . $i * $j;
//     }
// }
// $array1 = array("rice", "pasta");
// foreach ($array1 as $array) {
//     echo $array . "<br>";
// }

// $array2 = array(
//     "food1" => "rice",
//     "food2" => "beans"
// );

// foreach ($array2 as $key => $value) {
//     echo"key => $key ";
//     echo "value => $value ";
// }

// $i = 5; $fac = 1;
// while ($i > 0) {
//     $result = $fac *= $i;
//     $i--;
// }
// echo $result;

// $i = 1; $sum = 0;
// do {
//     if($i % 2 == 0){
//         $result = $sum += $i;
//     }
//     $i++;
// } while ($i <= 10);


// new
$num3 = 4;
$factorial = 1;
while ($num3 > 0) {
    $result = $factorial *= $num3;
    $num3--;
}
echo $result;

for ($i = 0; $i <= 10; $i += 3) { 
    echo $i . "<br>";
}


$all = [
    'name' => "rodiat",
    'age' => 20,
    'department' => 'computer science'
];

foreach ($all as $key => $value) {
    echo 'key = ' . $key . ' ,value = ' . $value;;
    echo "<br>";
}

$a = 2;
while ($a <= 10) {
    echo $a . "<br>";
    $a+= 2;
}

$a = 4; $count = 1;
while ($a > 0) {
    $result = $count *= $a;
    $a--;
}
echo $result;
echo "<br>";

$a = 2;
do {
    echo $a . "<br>";
    $a++;
} while ($a <= 10);

echo "<br>";

$a = 1;
do {
    if ($a % 2 == 0) {
        echo $a . "<br>";
    }
    $a++;
} while ($a <= 10);
echo "<br>";

$a = 1;
while ($a <= 10) {
    if ($a % 2 == 0) {
        echo $a . "<br>";
    }
    $a++;
}
echo "<br>";
$a = 6; $counter = 1;
do {
    $result = $counter *= $a;
    $a--;
} while ($a > 0);

echo $result;
?>
