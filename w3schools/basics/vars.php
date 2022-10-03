<?php
$txt = "This is some text!";
$x = 5;
$y = 10.5;

echo $txt . "\n";
echo $x . "\n";
echo $y . "\n";

echo "The value of x is " . $x . "!\n";

$z = 5;

echo "sum: " . $x + $z . "\n";

echo "\n======================================================================\n";
echo "Data types\n";
echo "======================================================================\n";

$integer = 10;
var_dump($integer);
var_dump(is_int($integer));

$float = 1.2;
var_dump($float);

$boolean = true;
var_dump($boolean);

$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

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
        return "My car is a " . $this->color . " " . $this->model . "!\n";
    }
}
$myCar = new Car("black", "Volvo");
echo $myCar->message();
var_dump( $myCar);
$myCar = new Car("red", "Toyota");
echo $myCar->message();
var_dump($myCar);

$myCar = null;
var_dump($myCar);

echo "\n======================================================================\n";
echo "Strings\n";
echo "======================================================================\n";

$txt = "This is some text";
echo "Text: $txt " . "length: " . strlen($txt) . " word count: " . str_word_count($txt) . "\n";
echo "Reverse text: " . strrev($txt) . "\n";
echo "Position of the word 'some': " . strpos($txt, "some"). "\n";
echo "Replacing 'some' with 'some more': ". str_replace("some", "some more", $txt) . "\n";