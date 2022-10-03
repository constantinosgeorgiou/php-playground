<?php

declare(strict_types=1);

function sumInts(int $x, int $y): int
{
    $z = $x + $y;
    return $z;
}

function addFloatsGetInt(float $a, float $b): int
{
    return (int)($a + $b);
}

function addFiveByReference(&$value)
{
    $value += 5;
}

$number = 2;
addFiveByReference($number);
echo (string)$number;
?>