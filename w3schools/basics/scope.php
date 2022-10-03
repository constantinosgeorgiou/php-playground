<?php
$x = 5; // global scope
$y = 10;
function myTest() {
    $x = 10;
    // Using x inside this function will generate an error.
    echo "<p>Variable x inside function is: $x</p>\n";

    global $y;
    $z = $x + $y;
    echo "<p>z: $z</p>\n";

    global $x, $y;
    $z = $x + $y;
    echo "<p>z: $z</p>\n";


    $z = $GLOBALS['x'] + $GLOBALS['y'];
    echo "<p>z: $z</p>\n";
}
myTest();

echo "<p>Variable x outside function is: $x</p>\n";

function increment()
{
    static $x = 0;
    echo $x . "\n";
    $x++;
}
increment();
increment();
increment();