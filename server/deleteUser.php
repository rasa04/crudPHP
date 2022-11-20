<?php

require_once '../connect.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
	$mysql->query("DELETE FROM `users` WHERE `id` = '$id'");
    unset($_POST['id']);
	header('Location: /');
}
?>