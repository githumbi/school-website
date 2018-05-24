<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	


	$sql = "INSERT INTO contact (name, email, message ) 
			VALUES ('$name', '$email', '$message')";
	$result = $conn->query($sql);

	$_SESSION['msg'] = "We have received your details, we will contact you.";

	header('Location: ../contact.php');
}






