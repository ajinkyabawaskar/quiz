<?php
	include 'DBconnection.php';
	$name = ucwords(strtolower($_POST['name']));
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$sql = "INSERT INTO result (name,email,contact) VALUES ('$name','$email','$contact') ";
	if ($conn->query($sql) === TRUE) {
		header('Location: thanks.php');
	}
	else {
		header('Location: thanks.php');
	}
?>