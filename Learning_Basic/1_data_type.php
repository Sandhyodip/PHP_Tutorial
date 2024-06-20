<?php

$string= 'STRING';
echo gettype($string); // STRING
echo '<br>';

$integer= 8;
echo gettype($integer); // INTEGER
echo '<br>';

$float= 17.05;
echo gettype($float); // DOUBLE
echo '<br>';

$boolean= true;
echo gettype($boolean); // BOOLEAN
echo '<br>';

$array= array("SANDHYO", "SANCHARI", "NURUJJAMAN", "RITABRATA");
echo gettype($array); //ARRAY
echo '<br>';

$null= null;
echo gettype($null);
echo '<br>'; //NULL

class SayHello
{
    function hello(){
        echo "SANDHYODIP DAS";
    }
}
$object=new SayHello;
$object->hello(); //SANDHYODIP DAS
echo '<br>';
echo gettype($object); //OBJECT
echo '<br>';

// IF WE TAKE ANOTHER EXAMPLE

class Car
{
    public $color;
    public $model;
   
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My elder brother has bought a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("Black", "Kia Sonnet");
echo $myCar->message();
echo "<br>";
$myCar = new Car("Red", "Hyundai i10");
echo $myCar->message();
echo '<br>';

define('GREETING','Hi Sanchari..!!',true);
echo GREETING.'<br>'; // echo greeting

class MyClass {
    const MARRIAGE = "Sandhypdip loves Sanchari";

    public function printConstant() {
        echo self::MARRIAGE;
    }
}

echo MyClass::MARRIAGE.'<br>'; // Accessing the constant outside the class
$obj = new MyClass();
$obj->printConstant().'<br>'; // Output: Sandhypdip loves Sanchari

class MyClassTesting {
    public function __construct() {
        define("SUCCESS", "Coming Soon..!!");
    }
}

new MyClassTesting();
echo SUCCESS;