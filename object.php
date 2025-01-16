<?php
// class car
// {
//     public $brand; // Property
//     public $color;

//     // public function drive()
//     // { // Method
//     //     return "The car is driving.";
//     // }
// }

// $car1 = new car(); // Creating an object of the Car class
// $car1 ->brand = "Toyota"; // Assigning values to properties
// $car1 ->color = "Red";

// echo $car1 -> brand; // Output: Toyota
// echo "<br>";

// echo $car1->color; // Output: Red
// echo "<br>";

// echo $car1->drive(); // Output: The car is driving.

// class car{
//     // property
//     public $name;
//     public $color;


// // __construct() is used in custom classes to initialize properties when the object is created.
//     public function __construct($name, $color){
//         // $this:  Inside the constructor and other methods, $this refers to the current instance of the object.
//         $this -> name = $name;
//         $this -> color = $color;
//     }

//     // method
//     public function details(){
//         return "The details of a car";
//     }
// }

// $car = new car("benz", "blue");
// $car -> name = 'BENZ';
// echo $car -> name;
// $car -> color = 'yellow';
// echo $car -> color;
// echo $car -> details();


// // Create an object of stdClass
// $car = new stdClass();

// // Assign properties
// $car->name = 'BENZ';
// $car->color = 'Black';

// // Add an anonymous function (method) to the object
// $car->details = function() {
//     return "The car is a  beautiful" ;
// };

// Call the anonymous method using the object
// echo $car->details(); // Output: The car is a Black BENZ


// new 
class details
{
    // properties
    public $name;
    public $age;
    public $department;

    // method
    public function det()
    {
        return "MY DETAILS ARE " . $this->name . $this->age . $this->department;
    }
}

$detail = new details();
$detail->name = "RODIAT";
$detail->age = 30;
$detail->department = "COMPUTER SCIENCE";

echo $detail->name;
echo "<br>";
echo $detail->age;
echo "<br>";

echo $detail->department;
echo "<br>";

echo $detail->det();


echo "<br>";

class all
{
    // properties
    public $food;
    public $color;

    public function __construct($food, $color)
    {
        $this->food = $food;
        $this->color = $color;
    }
    function al()
    {
        return $this->food . $this->color;
    }
}

$dea = new all("rice", "yellow");
echo $dea->food;
echo $dea->color ;


// Create an object of stdClass
$car = new stdClass();

// Assign properties
$car->name = 'BENZ';
$car->color = 'Black';

// Add an anonymous function (method) to the object
$car->details1 = function(){
    return "The car is a  beautiful" . $this -> name;
};

// Call the anonymous method using the object

?>
