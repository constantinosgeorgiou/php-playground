<?php

class greeting
{
    public static function welcome()
    {
        echo "Hello!";
    }

    public function __construct()
    {
        self::welcome();
    }
}

greeting::welcome();
new greeting();

class SomeOtherClass
{
    public function message()
    {
        greeting::welcome();
    }
}

$obj = new SomeOtherClass();
$obj->message();

class pi
{
    public static $value = 3.14159;
    public function staticValue()
    {
        return self::$value;
    }
}

echo "<br>" . pi::$value . "<br>";
$pi = new pi();
echo $pi->staticValue() . "<br>";
