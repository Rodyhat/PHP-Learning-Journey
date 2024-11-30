<?php
// object
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

$nicon -> food = 'Beans and plantain';
echo $nicon->food;
echo "<br>";

$schools = new stdClass();
$schools -> sch1 = 'LAUTECH';
echo $schools -> sch1;
echo "<br>";

?>
