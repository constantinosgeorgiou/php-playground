<?php

$command = 'python hello.py';
$output  = null;
$code    = null;

exec( $command, $output, $code );

print_r( $command );
print_r( $output );
print_r( $code );

