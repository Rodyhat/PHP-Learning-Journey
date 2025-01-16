<?php
$a = 1; $sum = 0;
while ($a <= 10) {
    if ($a % 2 == 0) {
         $sum += $a;
    }
    $a++;
}
echo 'the sum of all even number is ' . $sum;
echo "<br>";

$b = 1; $sum = 0;
do {
    if ($b % 2 == 0) {
         $sum += $b;
    }
    $b++;
} while ($b <= 10);


echo $sum;
echo "<br>";


$arrays = ['rice', "yam", 'beans'];
foreach ($arrays as $array) {
    echo $array;
}

$array = [
    'name' => 'rodiat',
    'age' => 40
];

foreach ($array as $key => $value) {
    echo $key;
}
?>