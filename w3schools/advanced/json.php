<?php

$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo json_encode($age);
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);
echo "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));
echo "<br>";
var_dump(json_decode($jsonobj, true));
echo "<br>";

$obj = json_decode($jsonobj);
foreach ($obj as $key => $value) {
    echo $key . " -> " . $value . "<br>";
}

$obj = json_decode($jsonobj, true);
foreach ($obj as $key => $value) {
    echo $key . " -> " . $value . "<br>";
}
