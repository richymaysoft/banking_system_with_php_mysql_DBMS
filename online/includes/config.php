<?php
error_reporting(0);
/*

Version: 2.3
Updated on: 27th June, 2022
Written by: Richard Imafidon
LinkedIn: rich-eghe
*/
$script = 'West Blue Online Banking.';
$script_type = 'bank';
$version = '2.3';
$updated = '27th June, 2022';
$conn = new mysqli( 
"localhost", //Database Type
"westblue_westuser", //Database Username
"Larry4real@Larry4real@", //Database Password
"westblue_west" //Database Name
); 
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}

