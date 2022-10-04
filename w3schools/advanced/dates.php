<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("1") . "<br>";

echo "The time is " . date("h:i:sa") . "<br>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa") . "<br>";

$d = mktime(11, 14, 54, 8, 12, 2022);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("10:30pm April 15 2022");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);
while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}
?>

&copy; 2022-<?php echo date("Y"); ?>