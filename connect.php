<?php
try {
	$mysql = new mysqli('localhost', 'root', 'mysql', 'fara');
} catch (mysqli_sql_exception $e) {
	echo '<pre>';
	var_dump($e);
	echo '</pre>';
}