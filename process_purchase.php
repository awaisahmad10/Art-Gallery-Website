<?php

if (isset($_POST)) {
	$host = "localhost";
	$database = "web_project1";
	$user = "root";
	$pass = "";

	$connection = mysqli_connect($host, $user, $pass, $database);
	if (mysqli_connect_errno()) {
  		die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errorno().")");
		}

	if (isset($_POST['paint1'])) { $paint1 = $_POST['paint1']; }
	if (isset($_POST['size1'])) { $size1 = $_POST['size1']; }
	if (isset($_POST['paint2'])) { $paint2 = $_POST['paint2']; }
	if (isset($_POST['size2'])) { $size2 = $_POST['size2']; }
	if (isset($_POST['fname'])) { $fname = $_POST['fname']; }
	if (isset($_POST['lname'])) { $lname = $_POST['lname']; }
	if (isset($_POST['email'])) { $email = $_POST['email']; }
	if (isset($_POST['address'])) { $address = $_POST['address']; }
	if (isset($_POST['province'])) { $province = $_POST['province']; }
	if (isset($_POST['postal'])) { $postal = $_POST['postal']; }

	$sql = "INSERT INTO purchase_painting (painting1, size1, painting2, size2, first_name, last_name, email, address, province, postal_code) VALUES (
			'{$connection-> real_escape_string($paint1)}',
			'{$connection-> real_escape_string($size1)}',
			'{$connection-> real_escape_string($paint2)}',
			'{$connection-> real_escape_string($size2)}',
			'{$connection-> real_escape_string($fname)}',
			'{$connection-> real_escape_string($lname)}',
			'{$connection-> real_escape_string($email)}',
			'{$connection-> real_escape_string($address)}',
			'{$connection-> real_escape_string($province)}',
			'{$connection-> real_escape_string($postal)}',)";

	$insert = $connection->query($sql);
	if ($insert == TRUE) {
		echo "<h3>Successfully purchased!</h3>";
	}
	else {
		die ("Error: {$connection->errno} : {$connection->error}");
	}

	mysqli_close($connection);

	header("Location: C:\wamp64\www\HomePage.html");
	exit();
}

?>