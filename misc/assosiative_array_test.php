<?php

$letter_number = array(
	'a' => 1,
	'b' => 2,
	'c' => 3,
	'd' => 4,
);

if ( array_key_exists( 'a', $letter_number ) ) {
	echo( "array['a'] {$letter_number['a']}\n" );
}

if ( array_key_exists( 'z', $letter_number ) ) {
	echo( "array['z'] {$letter_number['z']}\n" );
}
$api_credentials = array(
	'api_credentials' => array(
		'token' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
	),
);

$tmp = array(
	array(
		'change_id_365' => 'AAAAAAA',
	),
	array(
		'change_id_365' => 'BBBBBBBBBBB',
	),
	array(
		'change_id_365' => 'CCCCCC',
	),
);


$list_sync_changes_applied            = array( 'list_sync_changes_applied' => $tmp );
$json                                 = array( $api_credentials, $list_sync_changes_applied );
$url                                  = 'http://api.powersoft365.com/list_sync_changes_applied';
$str                                  = json_encode( $json );
$str                                  = explode( ',', $str );
$str_token                            = str_split( $str[0] );
$str_token[0]                         = '{';
$str_token[ count( $str_token ) - 1 ] = '';
$str_token[1]                         = '';
$str_token                            = implode( $str_token );

print_r( $str_token );

$str_changes    = str_split( $str[1] );
$str_changes[0] = '';
$str_count      = count( $str );
if ( $str_count > 2 ) {
	$str_changes_last                                   = str_split( $str[ $str_count - 1 ] );
	$str_changes_last[ count( $str_changes_last ) - 1 ] = '';

	$str[ $str_count - 1 ] = implode( $str_changes_last );
	$str_changes           = implode( $str_changes );
	$request               = $str_token . ',' . $str_changes;
	$str_count             = count( $str );
	for ( $i = 2;$i < $str_count; $i++ ) {
		$request = $request . ',' . $str[ $i ];

	}
} else {
	$str_changes[ count( $str_changes ) - 1 ] = '';
	$request                                  = implode( $str_changes );
	$request                                  = $str_token . ' , ' . $request;
}
print( "\nrequest\n" );
print_r( $request );
