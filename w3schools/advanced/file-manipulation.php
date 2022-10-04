<?php

// echo readfile("webdictionary.txt");

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

// Read and output whole file
echo fread($myfile, filesize("webdictionary.txt")) . "<br>";

// Read and output a single line
fseek($myfile, 0);
echo fgets($myfile) . "<br>";

// Read each line and output it until end of file.
fseek($myfile, 0);
while (!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}

// Read and output single character until end of file.
fseek($myfile, 0);
while (!feof($myfile)) {
    echo fgetc($myfile);
}

fclose($myfile);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$txt = "Playing around with php\n";
fwrite($myfile, $txt);
$txt = "Writing another line\n";
fwrite($myfile, $txt);

fclose($myfile);

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

$txt = "Appending some text\n";
fwrite($myfile, $txt);
$txt = "Appending some MORE text\n";
fwrite($myfile, $txt);

fclose($myfile);



