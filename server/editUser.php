
<?php
require_once '../connect.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
	$last_name = $_POST['last_name'];
	$genre = $_POST['genre'];
	$mysql->query("UPDATE `users` SET `name` = '$name', `last_name` = '$last_name', `genre` = '$genre' WHERE `id` = '$id'");
	unset($_POST['name']);
	unset($_POST['last_name']);
	unset($_POST['genre']);
    header('Location: /');
}

?>
