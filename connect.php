<?php
try {
	$mysql = new mysqli('ec2-99-80-170-190.eu-west-1.compute.amazonaws.com', 'dsgeqsgdivoneh', 'b9910ab3c7f47f9faa17db14651dbdd94c4536b22dccbb05d5da461c208c788a', 'd94bto9jtm0p33');
} catch (mysqli_sql_exception $e) {
	echo '<pre>';
	var_dump($e);
	echo '</pre>';
}