<?php

$test_command = 'python hello.py';
$test_mode    = 'r';

$test_handle = popen( $test_command, $test_mode );
echo "'$test_handle'; " . gettype( $test_handle ) . "\n";
$test_read = fread( $test_handle, 2096 );
echo $test_read;
pclose( $test_handle );
