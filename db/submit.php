<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
	$student = $_POST['student'];
	$parent = $_POST['parent'];
	$class = $_POST['class'];
	$phone = $_POST['phone'];


	$sql = "INSERT INTO submit (student, parent, class, phone) 
			VALUES ('$student', '$parent', '$class', '$phone')";
	$result = $conn->query($sql);

	$_SESSION['msg'] = "We have received your details, we will contact you.";

	header('Location: ../index.php');
}





