<?php
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
    protected function delicious()
    {
        echo "I am delicious.";
    }
}

class Strawberry extends Fruit
{
    public $weight;
    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function message()
    {
        echo "Am I a fruit or a berry?";
        $this->delicious();
    }
    public function intro()
    {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} grams.";
    }
}

$strawberry = new Strawberry("strawberry", "red", 50);
$strawberry->message();
$strawberry->intro();

class Goodbye
{
    const LEAVING_MESSAGE = "Thank you for playing around with PHP!";
    public function byebye()
    {
        echo self::LEAVING_MESSAGE;
    }
}

echo "<br>" . Goodbye::LEAVING_MESSAGE . "<br>";
$goodbye = new Goodbye();
$goodbye->byebye();
