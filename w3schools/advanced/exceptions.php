<?php

function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

try {
    echo divide(5, 0);
} catch (Exception $e) {
    $code = $e->getCode();
    $message = $e->getMessage();
    $file = $e->getFile();
    $line = $e->getLine();
    echo "Exception throw in $file on line $line: [Code $code] $message" . "<br>";
} finally {
    echo "Process complete." . "<br>";
}

try {
    echo divide(5, 0);
} finally {
    echo "Process complete." . "<br>";
}
