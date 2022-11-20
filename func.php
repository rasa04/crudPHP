<?php
require_once 'connect.php';

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$last_name = $_POST['last_name'];
	$genre = $_POST['genre'];
}

if (isset($_POST['name'])) {
	$edit_name = $_POST['edit_name'];
	$edit_last_name = $_POST['edit_last_name'];
	$edit_pos = $_POST['edit_genre'];
	$get_id = $_GET['id'];
}
