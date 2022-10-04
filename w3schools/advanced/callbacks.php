<?php

function my_callback($item)
{
    return strlen($item);
}

$fruits = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $fruits);
print_r($lengths);
echo "<br>";

$lengths = array_map(function ($item) {
    return strlen($item);
}, $fruits);
print_r($lengths);
echo "<br>";

function exclaim($str) {
    return $str . "! ";
}

function ask($str) {
    return $str . "? ";
}

function printFormatted($str, $format){
    echo $format($str);
}

printFormatted("Look out", "exclaim");
printFormatted("Look out", "ask");