<?php
// PHP = Hypertext Preprocessor =  backend programming language which deals with server-side, it is an open-source server scripting language for building dynamic and interactive web page
// server-side is responsible for processing a request, interacting with the database and returning an output to the client device

// How to display an output
// ways to write echo
echo "HELLO, WORLD";
echo "<br>";

ECHO "HELLO, WORLD";
echo "<br>";

EcHo "HELLO, WORLD";

print "HELLO WORLD";
print_r("HELLO, WORLD");

// var_dump provide more details about the data, giving the data type and the length of the data
var_dump("HELLO, WORLD");
echo "<br>";

// variables = they are used to store data
// using the dollar sign to declare a variable
$name = "RODIAT";
echo $name;
echo "<br>";

// using constant to declare a variable
// constant are identifiers that have a fixed length and can not be change or redeclared
// constant = they are defined using the const keyword and the define() function
const food = "RICE";
echo food;
echo "<br>";

define('info1', "Welcome to backend programming class");
echo info1;
echo "<br>";

// comment are used to explain our code for readability and are usually ignored during execution
// shortcut on the keyboard, ctrl + forward slash(/)

// data types are used as classifications for developers to know what to do with it
// list of data type
// String, Integer, Float, Boolean, Array, Object

// string are series of characters enclosed in a single quote ir double quote
$string1 = "Buggybillion"; 
echo $string1;
echo "<br>";

// operations that can be performed on string
// strrev = it reverse our string
echo strrev($string1);
echo "<br>";

// strpos = provide the position of a particular character in a string
echo strpos($string1, 'n');
echo "<br>";

$string2 = "HELLO WORLD";
// strolower = convert our string to lowercase
echo strtolower($string2);
echo "<br>";

// stroupper = convert the string to an uppercase
echo strtoupper($string1);
echo "<br>";

$string3 = "I love coding";
// str_replace = it takes three parameters
echo str_replace("love", "fall in love with", $string3);
echo "<br>";

// strlen =  return the length of a particular string
echo strlen($string3);
echo "<br>";

// string concatenation = join two or mire string together, we concatenate using the dot sign(.)
echo $string1 . $string2;
echo "<br>";

// str_word_count =  it count the word in the string
echo str_word_count($string3);
echo "<br>";

// integer = data type with no decimal numbers
$num1 = 30;
echo $num1;
echo "<br>";

// float are data type with decimal numbers
$num2 = 30.4;
echo $num2;
echo "<br>";

// boolean = data type which are the true and false, they are used to perform conditional testing
$num3 = true;
echo $num3;
echo "<br>";

$num3 = false;
echo $num3;
echo "<br>";

// math function 
echo pi();
echo "<br>";

echo sqrt(49);
echo "<br>";

echo rand(1,6);
echo "<br>";

echo round(3.5);
echo "<br>";

// floor are used to round down numbers to the nearest integer, they round number to a lower value
echo floor(30.5);
echo "<br>";

// ceil are used to round up numbers to the nearest integer, they round number to a higher value
echo ceil(3.7);

// date function
// H,h = Hour, i = minute, s = seconds
echo date("H-i-s");
echo "<br>";

// D = days of the week, Y = 4 digit for year, m = month, d = day in number , y = 2 digit for year
echo date('D-Y-m-d-y');
echo "<br>";

// l = full representation of days of the weeek, A = am or pm, F = full representation of month of the year
echo date("l-A-F");
?>