<?php
	

	return $conn= mysqli_connect('localhost', 'root','','school');

if (!$conn) {
	die("mysqli error: " .mysqli_connect_error());
}

?>