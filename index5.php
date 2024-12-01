<?php
// Function = it is a block of program that can used repeatedly in a program. A function will not execute aumatically when a page loads. A function will be executed by the call to the function

// How to create a function
// It start with the function keyword, followed by the name of the function
function myMessage(){
    echo "HELLO WORLD!";
}
// the opening curly brace indicate the beginning of the function code while the closing curly brace indicate the end of the function .

myMessage(); // to call or revoke the function
echo "<br>";

// information can passed to the function through argument. An argument is just like a variable
// Argument are specified after the function name, inside the parenthesis, you can add as many argument as you want, just seperate them with a comma

// one argument
function familyName($fname){
echo $fname;
}
familyName("Rodiat");
echo "<br>";
familyName("Ridwan");
echo "<br>";
familyName("Roheemah");
echo "<br>";
familyName("Saheed");
echo "<br>";

function myFood($food){
    echo "My favourite food is " . $food;
}
myFood("Beans and plaantain");
echo "<br>";

// two argument
function details($name, $school){
echo "My name is ". $name . " and i attend " . $school;
}
details("Rodiat", "LAUTECH");
echo "<br>";

// how to use a default parameter, if we call the function without arguments, it takes the default value as argument
function takeIn($food1 = "Rice"){
    echo $food1;
}
takeIn();
echo "<br>";

// to let a variable returns a value, we use the return keyword
// add
function add($x, $y){
$z = $x + $y;
return $z;
}
echo add(5,6);
echo "<br>";

// subtract
function subtract($s, $t){
    $u = $s - $t;
    return $u;
}
echo subtract(9 , 4);
echo "<br>";

// multiply
function multiply($a, $b){
    $c = $a * $b;
    return $c;
}
echo multiply(5,5);
echo "<br>";

// global scope  = they are variables declared outside a function and can be accessed outside a function
$t = "Hello world";
function scope1(){

}
scope1();
echo $t;
echo "<br>";

// local scope = they are variable declared inside a function and can only be accessed inside a function
function scope2(){
    $m = 5;
    echo $m;
}
scope2();
echo "<br>";




// CHALLENGE
// create a function for a basic calculator
// write a PHP code that perform basic arithmetic operations: addition, subtraction, multiplication and division,
function calculate($num1,$num2, $operation){
    if($operation == "add"){
        $sum = $num1 + $num2;
        return $sum;
    }elseif($operation == "subtract"){
        $subtract = $num1 - $num2;
        return $subtract;
    }elseif($operation == "multiply"){
        $multiply = $num1 * $num2;
        return $multiply;
    }elseif($operation == "divide"){
        if($num2 == 0){
            echo "Cannnot be divided";
        }else{
            $divide = $num1 / $num2;
            return $divide;
        }
    }else{
        echo "The operation is invalid";
    }
}
echo calculate(5,3, "add");
echo "<br>";
echo calculate(5,3, "subtract");
echo "<br>";
echo calculate(5,3, "multiply");
echo "<br>";
echo calculate(5,3, "divide");
echo "<br>";
echo calculate(5,3, "mod"); // output = The operation is invalid
echo "<br>";
?>