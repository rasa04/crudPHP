
<?php
require_once '../connect.php';
if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$last_name = $_POST['last_name'];
	$genre = $_POST['genre'];
    $mysql->query("INSERT INTO `users`(`name`, `last_name`, `genre`) VALUES('$name', '$last_name', '$genre')");
	unset($_POST['name']);
	unset($_POST['last_name']);
	unset($_POST['genre']);
    header('Location: /');
}
?>
