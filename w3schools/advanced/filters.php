<?php

foreach (filter_list() as $id => $filter) {
    echo "$id ---> $filter" . "<br>";
}

$str = "<h1>Wow what happened!?</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr . "<br>";

$integer = 0;

if (filter_var($integer, FILTER_VALIDATE_INT) === 0 or !filter_var($integer, FILTER_VALIDATE_INT) === false) {
    echo ("Integer is valid") . "<br>";
} else {
    echo ("Integer is not valid") . "<br>";
}

$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo ("$ip is a valid IP address") . "<br>";
} else {
    echo ("$ip is not a valid IP address") . "<br>";
}

$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo ("$email is a valid email address") . "<br>";
} else {
    echo ("$email is not a valid email address") . "<br>";
}

$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo ("$url is a valid URL") . "<br>";
} else {
    echo ("$url is not a valid URL") . "<br>";
}

$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
    echo ("Variable value is not within the legal range") . "<br>";
} else {
    echo ("Variable value is within the legal range") . "<br>";
}


$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo ("$ip is a valid IPv6 address") . "<br>";
} else {
    echo ("$ip is not a valid IPv6 address") . "<br>";
}


$url = "https://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo ("$url is a valid URL with a query string") . "<br>";
} else {
    echo ("$url is not a valid URL with a query string") . "<br>";
}
