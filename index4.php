<?php
// object = are data type that allows one to group properties and method in one entity
// class is a template for objects, and an object is an instance of a class
// ways to declare or create an object(clas,stdClass)
// public , private and protected


// Define a class
class Car
{
    // Properties
    public $brand;
    public $color;

    // Constructor
    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method
    public function describe()
    {
        return "This car is a $this->color $this->brand.";
    }
}
// public = it can be accessed outtside where it is declared
class goat
{
    // properties
    public $color;
    public $size;
    public $age;
    public $breed;
}

$goatDetails = new goat();
$goatDetails->color = 'yellow';
echo $goatDetails->color;
echo "<br>";

$goatDetails->size = 'Medium';
echo $goatDetails->size;
echo "<br>";

$goatDetails->age = 10;
echo $goatDetails->age;
echo "<br>";

class fruit
{
    public $name;
    public $color;
}

$fruitDetails = new fruit();
$fruitDetails->name = 'Apple';
echo $fruitDetails->name;
echo "<br>";

$fruitDetails->color = 'Green';
echo $fruitDetails->color;
echo "<br>";


$apple = new fruit();
var_dump($apple instanceof fruit);
echo "<br>";

// stdClass 
$nicon = new stdClass();
$nicon->email = 'Brown';
echo $nicon->email;
echo "<br>";

$nicon->food = 'Beans and plantain';
echo $nicon->food;
echo "<br>";

$schools = new stdClass();
$schools->sch1 = 'LAUTECH';
echo $schools->sch1;
echo "<br>";


// new 
class food
{
    public $rice;
    public $color;
}

$general = new food();
$general->rice = "food1";
echo $general->rice;
echo "<br>";
$general->color = "yellow";
echo $general->color;
echo "<br>";

$general2 = new stdClass();
$general2->color = "blue";
echo $general2->color;
echo "<br>";


// object are data type that allow one to group method and properties on one entity
// method are functions while properties/attribute are the variable declared

class det1
{
    public $laptop;
    public $color;
}
$gende1 = new det1();
$gende1->laptop = "DELL";
echo $gende1->laptop;
echo "<br>";

$gende2 = new stdClass();
$gende2->colors = "green";
echo $gende2->colors;

echo "<br>";

function car4($s = 4)
{
    echo $s;
}
car4();
echo "<br>";

function add($x, $y)
{
    $z = $x + $y;
    return $z;
}
echo add(3, 4);
echo "<br>";

function subtract($m, $n)
{
    $o = $m - $n;
    return $o;
}
echo subtract(7, 6);
